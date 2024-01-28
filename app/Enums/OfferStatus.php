<?php

namespace App\Enums;

enum OfferStatus: string
{
    case Draft = 'Draft';
    case Pending = 'Pending';
    case Accepted = 'Accepted';
    case Declined = 'Declined';
    case Withdrawn = 'Withdrawn';
}
