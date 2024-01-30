<?php

namespace App\Enums;

enum MilestoneStatus: string
{
    case Pending = 'Pending';
    case Funded = 'Funded';
    case Declined = 'Declined';
    case Approved = 'Approved';
}
