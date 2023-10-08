<?php
/**
 * Created by PhpStorm.
 * User: Aunok
 * Date: 12/19/2019
 * Time: 4:37 PM
 */

namespace App\Utility;

use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NotificationUtility
{
    public static function setNotification($type, $message = '', $link = '/', $receiver = 0, $sender = false, $showingPanel = null)
    {
        try {
            $notification = new Notification;
            $notification->notification_type = $type;
            $notification->sender_id = $sender ? $sender : (Auth::check() ? Auth::user()->id : 0);
            $notification->receiver_id = $receiver;
            $notification->message = translate($message);
            $notification->link = $link;
            $notification->seen_by_receiver = 0;
            $notification->showing_panel = $showingPanel;
            $notification->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public static function getMyNotifications($limit = 0, $onlyUnseen = true, $onlyCount = false, $paginated = false)
    {
        $list = array();
        $count = 0;

        if (!Auth::check() && !$onlyCount) {
            return $list;
        } elseif (!Auth::check() && $onlyCount) {
            return $count;
        }

        $panel = '';
        if (isClient()) {
            $panel = 'client';
        } elseif (isExpert()) {
            $panel = 'expert';
        } elseif (!isClient() && !isExpert()) {
            $panel = 'admin';
        }


        $notificationsQuery = Notification::where('receiver_id', Auth::user()->id)->latest();

        if ($panel == 'admin') {
            $notificationsQuery->orWhere('showing_panel', $panel);
        }
        if ($onlyUnseen == true) {
            $notificationsQuery->where('seen_by_receiver', 0);
        }

        //return only the numbers of notifications
        if ($onlyCount) {
            return $notificationsQuery->count();
        } elseif ($paginated) {
            //return paginated data for all notifications page
            return $notificationsQuery->paginate($limit);
        }
        $notifications = $notificationsQuery->limit($limit)->get();

        foreach ($notifications as $notification) {
            if ($notification->sender != null) {
                $item = array();
                $item['message'] = $notification->message;
                $item['link'] = url($notification->link);
                $item['sender_name'] = $notification->sender->name;
                $item['sender_photo'] = $notification->sender->photo > 0 ? customAsset($notification->sender->photo) : asset('assets/backend/default/img/avatar-place.png');
                $item['seen'] = $notification->seen_by_receiver == 1 ? true : false;
                $item['date'] = Carbon::parse($notification->created_at)->diffForHumans();

                $list[] = $item;
            }
        }

        return $list;
    }

    public static function makeMyNotificationsSeen()
    {
        try {
            $panel = '';
            if (isClient()) {
                $panel = 'client';
            } elseif (isExpert()) {
                $panel = 'expert';
            } elseif (!isClient() && !isExpert()) {
                $panel = 'admin';
            }

            if (!Auth::check()) {
                return false;
            }

            $notificationsQuery = Notification::where('receiver_id', Auth::user()->id);
            $notificationsQuery->where('seen_by_receiver', 0);

            if ($panel == 'admin') {
                $notificationsQuery->orWhere('showing_panel', $panel);
            }
            $notificationsQuery->update(['seen_by_receiver' => 1]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
