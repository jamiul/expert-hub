<?php

use App\Models\User;

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
