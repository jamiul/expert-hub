<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case Draft = 'Draft';
    case InReview = 'In Review';
    case Published = 'Published';
    case Closed = 'Closed';
}
