<?php

namespace App\Models;

use App\trait\ImageUpload;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Category extends Model
{
    use ImageUpload , QueryCacheable;
    public $cacheFor = 3600;
    protected  static bool $flushCacheOnUpdate = true;

    protected $with = ['image'];

    use HasFactory, Sluggable;

    protected $fillable = [
        "name",
        "description"
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, "imageable");
    }

    public function event(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
