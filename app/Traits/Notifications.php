<?php
namespace App\Traits;
use App\Models\Notification;
use App\Models\NotificationUser;

trait Notifications
{

    public function addNotif(Notification $notification, NotificationUser $notificationUser)
    {
        $notif = Notification::create([
            'sender_id' => $notification->getSenderId(),
            'title' => $notification->getTitle(),
            'type' => $notification->getType(),
            'body' => $notification->getBody()]);

        NotificationUser::create([
            'notification_id' => $notif->id,
            'receiver_id' => $notificationUser->getReceiverId()
        ]);
    }
}
