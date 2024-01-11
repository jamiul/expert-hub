<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\ProjectPostNotification;
use Faker\Factory;
use Illuminate\Console\Command;
use Notification;

class SendDummyNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-dummy-notifications {--user=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Dummy Notification to user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user_id = $this->option( 'user' );

        $faker = Factory::create();

        if ( $user_id ) {
            try {
                //send notification to single user
                $user = User::findOrFail( $user_id );
                //todo: send project model directly
                $user->notify( new ProjectPostNotification( [
                    'title'   => $faker->sentence,
                    'message' => $faker->text( $maxNbChars = 300 ),
                    'link'    => 'http://eduexhub.com',
                    'button' => 'view proposal',
                    'avatar'  => asset( '/assets/frontend/default/img/expert_dashboard/profile-img.png' ),
                ] ) );
                echo 'notification sent';
            } catch ( \Exception $ex ) {
                echo $ex->getMessage();
            }
        } else {
            try {
                //send notification to multiple user
                $users = User::get();
                //todo: send project model directly
                Notification::send( $users, new ProjectPostNotification( [
                    'title'   => $faker->sentence,
                    'message' => $faker->text( $maxNbChars = 300 ),
                    'link'    => 'http://eduexhub.com',
                    'button' => 'view proposal',
                    'avatar'  => asset( '/assets/frontend/default/img/expert_dashboard/profile-img.png' ),
                ] ) );
                echo 'notification sent';
            } catch ( \Exception $ex ) {
                echo $ex->getMessage();
            }
        }

        return 0;
    }
}
