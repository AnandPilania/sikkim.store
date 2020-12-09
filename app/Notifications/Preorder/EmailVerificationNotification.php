<?php

namespace App\Notifications\Preorder;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\URL;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hi, '.$notifiable->name.' !')
            ->subject('Preorder Email Verification')
            ->line('Please verify your email address.')
            ->action('Verify', url($this->signedUrl($notifiable)))
            ->line('If you did not register, no further action is required.')
            ->line('Thank you for using our application!');
    }

    private function signedUrl($notifiable)
    {
        return URL::temporarySignedRoute('preorder.verify', now()->addMinutes(30), ['preorder' => $notifiable->email]);
    }

}
