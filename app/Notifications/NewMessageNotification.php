<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewMessageNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */


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
    // app/Notifications/NewMessageNotification.php

    public $latestMessage;

    public function __construct($latestMessage)
    {
        $this->latestMessage = $latestMessage;
    }

    public function toDatabase($notifiable)
    {
        return [
            'user_id' => $notifiable->id,
            'message' => 'Your notification message',
            'link' => 'your/link',
        ];
    }
}
