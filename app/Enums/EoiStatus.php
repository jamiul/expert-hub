<?php

namespace App\Enums;

enum EoiStatus: string
{
    case Submitted = 'Submitted';
    case Interviewing = 'Interviewing';
    case Rejected = 'Rejected';
}
