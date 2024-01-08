<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use Illuminate\View\View;

class NotificationsController extends Controller
{
    public function notifications()
    {

        return view( 'frontend.notifications.expert-notifications' );
    }
}
