<?php

namespace App\Enums;

enum ContractStatus: string
{
    case Active = 'Active';
    case Hold = 'Hold';
    case Canceled = 'Canceled';
    case Completed = 'Completed';
}
