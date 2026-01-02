<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAdoptionRequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $adoption)
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
            ->subject('Nouvelle demande d’adoption reçue')
            ->greeting('Bonjour' . $notifiable->first_name . ',')
            ->line('Vous avez reçu une demande d’adoption pour votre animal ' . $this->adoption->animal->name)
            ->action('Voir la demande', route('admin.adoptions.index'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'adoption' =>  $this->adoption->first_name . ' ' . $this->adoption->last_name,
            'animal' => $this->adoption->animal->name,
            'message' => 'Vous avez reçu une nouvelle demande d’adoption pour ' . $this->adoption->animal->name,
            'message_id' => $this->adoption->id,
            'route' => route('admin.adoptions.index')
        ];
    }

}
