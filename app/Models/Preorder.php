<?php

namespace App\Models;

use App\Notifications\Preorder\EmailVerificationNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\MustVerifyEmail as VerifiesEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Preorder extends Model implements MustVerifyEmail
{
    use HasFactory, Notifiable, VerifiesEmail;

    protected $fillable = ['email', 'name', 'phone', 'business'];

    public function getInitialAttribute(): string
    {
        [$firstName, $lastname] = explode(' ', $this->name, 2);
        return Str::upper(Str::substr($firstName, 0, 1) . Str::substr($lastname, 0, 1));
    }

    public function getPhoneAttribute(): string
    {
        return '+91 ' . $this->attributes['phone'];
    }

    public function sendEmailVerificationNotification(): void
    {
        $this->notify(new EmailVerificationNotification());
    }

    public function getRouteKeyName(): string
    {
        return 'email';
    }

}
