<?php

namespace App\Models;

use App\Enums\ReservationTypeEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Event extends Model
{
    use HasFactory, Sluggable;

    protected $with = ['category', 'image'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeFilterSearch($query, array $filterSearch)
    {

        $query->when($filterSearch['search'] ?? false, fn($query, $search) => $query
            ->where('title', 'like', '%' . $search . '%')
            ->where('isVerified', '=', true)
        );
        $query->when($filterSearch['filter'] ?? false, fn($query, $search) => $query
            ->where('category_id', 'like', '%' . $search . '%')
            ->where('isVerified', '=', true)
        );
        if (!count(array_filter($filterSearch))) {
            $query->latest();
        }
    }


    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    protected $fillable = [
        'title',
        'description',
        'localisation',
        'date',
        'price',
        'totalPlace',
        'reservationType',
        'category_id',
        'user_id'
    ];
    protected $casts = [
        'reservationType' => ReservationTypeEnum::class,
    ];

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, "imageable");
    }

    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
