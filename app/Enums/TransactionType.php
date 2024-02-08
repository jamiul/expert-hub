<?php

namespace App\Enums;

enum TransactionType: string
{
    case Payment = 'Payment';
    case FixedPrice = 'Fixed Price';
    case ServiceFee = 'Service Fee';
    case ContractInitializationFee = 'Contract Initialization Fee';

    case GST = 'GST';

    case Refund = 'Refund';

    case Withdrawal = 'Withdrawal';
}
