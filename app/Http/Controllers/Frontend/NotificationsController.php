<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;

class NotificationsController extends Controller {
    public function notifications() {

        return view( 'frontend.notifications.expert-notifications' );
    }
}
