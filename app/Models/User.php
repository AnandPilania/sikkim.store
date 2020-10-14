<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $guard = 'user';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'username';
    }

    public function getFirstNameAttribute(): string
    {
        return current(explode(' ', $this->attributes['name']));
    }

    public function getLastNameAttribute(): string
    {
        return last(explode(' ', $this->attributes['name']));
    }

    public function getAvatarAttribute(): string
    {
        return 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=' . $this->attributes['name'];
    }
}
