<?php

namespace App\Enums;

enum BookingSlotStatus: string
{
    case Pending = 'Pending';
    case WantToPay = 'Want to Pay';
    case Funded = 'Funded';
    case Canceled = 'Canceled';
    case Declined = 'Declined';
    case Approved = 'Approved';
    case Released = 'Released';
}
