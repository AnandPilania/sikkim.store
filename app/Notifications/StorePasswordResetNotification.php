<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class StorePasswordResetNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var string
     */
    private $token;

    /**
     * Create a new notification instance.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($notifiable->name.' Password Reset')
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->line('This password reset link will expire in 60 minutes.')
            ->action('Reset Password', url(route('seller.password.reset', $this->token), ['email' => $notifiable->email], true))
            ->line('If you did not request a password reset, no further action is required.');
    }
}
