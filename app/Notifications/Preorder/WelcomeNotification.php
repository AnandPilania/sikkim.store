<?php

namespace App\Notifications\Preorder;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Registration Successful')
            ->greeting('Hi, '.$notifiable->name .',')
            ->line('Thank you for registering with us.')
            ->line('You will be intimated via either SMS or email once we have reviewed your store request.')
            ->line('Vocal for Local')
            ->line('Thanks you for using your application.');
    }
}
