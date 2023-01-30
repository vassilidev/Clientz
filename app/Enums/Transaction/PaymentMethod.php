<?php

namespace App\Enums\Transaction;

enum PaymentMethod: string
{
    case CASH = 'cash';
    case CARD = 'card';
    case CHEQUE = 'cheque';
    case LINK = 'link';
}
