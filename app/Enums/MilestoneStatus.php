<?php

namespace App\Enums;

enum MilestoneStatus: string
{
    case Pending = 'Pending';
    case WantToPay = 'Want to Pay';
    case Funded = 'Funded';
    case Declined = 'Declined';
    case Approved = 'Approved';
    case Released = 'Released';
}
