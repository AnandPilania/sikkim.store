<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use App\Notifications\StorePasswordResetNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Store extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = ['password', 'remember_token',];

    protected $casts = ['email_verified_at' => 'datetime',];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StorePasswordResetNotification($token));
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLogoAttribute()
    {
        return url(asset('assets/logos/' . $this->attributes['logo'] . '.png'));
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
