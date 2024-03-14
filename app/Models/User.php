<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Controllers\ReservationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Parental\HasChildren;
use Rennokki\QueryCache\Traits\QueryCacheable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasChildren,SoftDeletes, QueryCacheable;
    public $cacheFor = 3600;
    protected  static bool $flushCacheOnUpdate = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];
    protected $with = ['image'];
    protected $childTypes = [
        'admin' => Admin::class,
        'organiser' => Organiser::class,
        'participant' => Participant::class,
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected $guard_name = 'web';

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, "imageable");
    }

    public function reservation(): HasMany
    {
        return $this->hasMany(reservation::class);
    }

    public function event(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function admin(): HasMany
    {
        return $this->hasMany(Admin::class, 'user');
    }

    public function organiser(): HasMany
    {
        return $this->hasMany(Organiser::class, 'user');
    }

    public function participant(): HasMany
    {
        return $this->hasMany(Participant::class, 'user');
    }


}
