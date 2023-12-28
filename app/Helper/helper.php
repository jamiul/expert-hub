<?php

use App\Models\User;
use Illuminate\Support\Carbon;

function getExpertByID($id): ?User
{
    return User::where('active_profile', 'Expert')->where('id', $id)->first();
}

function getExperts(): ?User
{
    return User::where('active_profile', 'Expert')->get();
}

function getFullNameByExpertID($id): ?string
{
    $expert = getExpertByID($id);

    if ($expert) {
        return $expert->first_name . ' ' . $expert->last_name;
    }

    return null;
}

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

// add new line after chunk length
function addNewLine($header_subtitle, $chunkLength)
{
    $chunks = collect(str_split($header_subtitle, $chunkLength))->map(function ($chunk) {
        return rtrim($chunk);
    });

    return $chunks->implode(PHP_EOL);
}

// Capitalize the first character of each word
function capitalizedString($string)
{
    return ucwords($string);
}