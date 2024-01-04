<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\ProjectPostNotification;
use Illuminate\Console\Command;
use Notification;

class SendDummyNotifications extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-dummy-notifications {--user=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Dummy Notification to user';

    /**
     * Execute the console command.
     */
    public function handle() {
        $user_id = $this->option( 'user' );
        if ( $user_id ) {
            try {
                //send notification to single user
                $user = User::findOrFail( $user_id );
                $user->notify( new ProjectPostNotification( [
                    'title'   => 'Hello',
                    'message' => 'welcome to the world',
                    'link'    => 'http://google.com'
                ] ) );
                echo 'notification sent';
            } catch ( \Exception $ex ) {
                echo $ex->getMessage();
            }
        } else {
            try {
                //send notification to multiple user
                $users = User::get();
                Notification::send( $users, new ProjectPostNotification( [
                    'title'   => 'Hello',
                    'message' => 'welcome to the world',
                    'link'    => 'http://google.com'
                ] ) );
                echo 'notification sent';
            } catch ( \Exception $ex ) {
                echo $ex->getMessage();
            }
        }

        return 0;
    }
}
