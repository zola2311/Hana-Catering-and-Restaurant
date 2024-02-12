<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DeliverySuccessful extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $delivery;
    public function __construct($delivery)
    {
        $this->delivery=$delivery;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $timestamp_2 = Carbon::now();

        return [
            'data' =>' Your sent '. $this->delivery.' was successful',
            'location' => 'location2',
            'timestamp' => $timestamp_2->toDateTimeString(),
        ];
    }
}
