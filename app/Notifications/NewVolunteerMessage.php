<?php

namespace App\Notifications;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewVolunteerMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $message)
    {
        $this->onConnection('redis');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Nouveau message pour du bénévolat')
            ->greeting('Bonjour' . $notifiable->first_name . ',')
            ->line('Vous avez reçu un nouveau message pour du bénévolat envoyé par ' . $this->message->first_name . ' ' . $this->message->last_name)
            ->line('Message : ' . $this->message->message)
            ->action('Voir le message', route('admin.volunteer_messages'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'contact' =>  $this->message->first_name . ' ' . $this->message->last_name,
            'email' => $this->message->email,
            'message' => 'Vous avez reçu une nouvelle demande de bénévolat de ' . $this->message->first_name,
            'message_id' => $this->message->id,
            'route' => route('admin.volunteer_messages')
        ];
    }
}
