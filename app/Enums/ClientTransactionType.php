<?php

namespace App\Enums;

enum ClientTransactionType: string
{
    case Payment = 'Payment';

    case FixedPrice = 'Fixed Price';

    case Consultation = 'Consultation';

    case Training = 'Training';

    case ServiceFee = 'Service Fee';

    case ContractInitializationFee = 'Contract Initialization Fee';

    case GST = 'GST';

    case Refund = 'Refund';

    case RefundFee = 'Refund Fee';
}
