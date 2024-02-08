<?php

namespace App\Enums;

enum ExpertTransactionType: string
{
    case FixedPrice = 'Fixed Price';

    case ServiceFee = 'Service Fee';

    case Refund = 'Refund';

    case Withdrawal = 'Withdrawal';
}
