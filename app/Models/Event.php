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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected $with = ['image'];
    protected $fillable = [
        'title',
        'description',
        'localisation',
        'date',
        'price',
        'totalPlace',
        'reservationType',
        'category_id'
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
        return $this->hasMany(reservation::class);
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
