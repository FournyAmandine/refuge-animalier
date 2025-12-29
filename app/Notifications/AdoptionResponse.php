<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdoptionResponse extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $adoption, public $status)
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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Résponse de votre demande d’adoption')
            ->greeting('Bonjour' . $this->adoption->first_name . ',')
            ->line(
                $this->status === 'accepted'
                    ? 'Bonne nouvelle, votre demande d’adoption a été acceptée ! Recontactez-nous pour prendre rendez-vous ou venez directement au refuge. Au plaisir de vous revoir bientôt pour venir chercher votre petit compagnon'
                    : 'Nous sommes désolés, votre demande d’adoption n’a pas été retenue. Contactez-nous pour en discutez ensemble.'
            )
            ->line('Animal concerné : ' . $this->adoption->animal->name)
            ->action('Aller sur la page de contact du site', route('public.contactpage'));
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
