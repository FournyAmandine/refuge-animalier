<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAnimalCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $animal)
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
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouvel animal ajouté')
            ->greeting('Bonjour ' . $notifiable->first_name . ',')
            ->line('Un bénévole a ajouté un nouvel animal : ' . $this->animal->name)
            ->action('Veuillez valider la fiche animale', route('admin.animals.show', $this->animal->id));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'Un bénévole vient d’ajouter ' .$this->animal->name,
            'animal_id' => $this->animal->id,
            'route' => route('admin.animals.show', $this->animal->id),
        ];
    }
}
