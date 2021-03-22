<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(private array $data)
    {
    }


    public function via(): array
    {
        return ['mail'];
    }


    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->subject('Contact Message (Sikkim Store)')
            ->greeting('Hello, Admin!')
            ->line('You have a new contact message')
            ->line("From: " . $this->data['name'])
            ->line("Email: " . $this->data['email'])
            ->line("Time: " . now()->format('d M, Y \a\t h:i A'))
            ->line('Message:')
            ->line('"' . $this->data['message'] . '"');
    }
}
