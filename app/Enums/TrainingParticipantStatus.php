<?php

namespace App\Enums;

enum TrainingParticipantStatus: string
{
    case Pending = 'Pending';
    case Funded = 'Funded';
    case Declined = 'Declined';
    case Approved = 'Approved';
    case Released = 'Released';

}
