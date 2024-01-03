<?php

use Illuminate\Support\Carbon;

function years()
{
    return range(date('Y'), 1950);
}

function eduexDateFormat($date)
{
    if($date instanceof Carbon){
        return $date->format('d-m-Y');
    }
    return 'Send Carbon Instance';
}

function getGravatar($email)
{
    return 'https://www.gravatar.com/avatar/' .  md5( strtolower( trim( $email ) ) );
}