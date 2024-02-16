<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingSuccessful extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $booking;
    public function __construct($booking,$timestamp_1)
    {
        $this->booking=$booking;
        $this->timestamp_1 = $timestamp_1;
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
    public function toArray($notifiable)
    {
        $timestamp_1 = Carbon::now();
        return [
            'data' =>' Your booking  '. $this->booking.' was set successfully',
            'location' => 'location1',
            'timestamp' => $this->$timestamp_1->toDateTimeString(),
        ];
    }
}
