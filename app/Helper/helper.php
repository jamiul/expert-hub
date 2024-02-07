<?php

use Illuminate\Support\Carbon;

function years()
{
    return range(date('Y'), 1950);
}

function eduexDateFormat($date)
{
    if ($date instanceof Carbon) {
        return $date->format('d-m-Y');
    }
    return 'Send Carbon Instance';
}

function getGravatar($email)
{
    return 'https://www.gravatar.com/avatar/' .  md5(strtolower(trim($email)));
}

function toast($type, $content, $livewireComponent = null)
{
    if ($livewireComponent) {
        $livewireComponent->dispatch('notify', content: $content, type: $type);
    } else {
        session()->flash('notify', ['type' => $type, 'content' => $content]);
    }
}

function activeRouteClass($routeName)
{
    if (Route::currentRouteName() === $routeName) {
        return 'current-menu-item';
    }
    return '';
}

function hoursHelper()
{
    return [
        "12:00 AM",
        "1:00 AM",
        "2:00 AM",
        "3:00 AM",
        "4:00 AM",
        "5:00 AM",
        "6:00 AM",
        "7:00 AM",
        "8:00 AM",
        "9:00 AM",
        "10:00 AM",
        "11:00 AM",
        "12:00 PM",
        "1:00 PM",
        "2:00 PM",
        "3:00 PM",
        "4:00 PM",
        "5:00 PM",
        "6:00 PM",
        "7:00 PM",
        "8:00 PM",
        "9:00 PM",
        "10:00 PM",
        "11:00 PM"
    ];
}
