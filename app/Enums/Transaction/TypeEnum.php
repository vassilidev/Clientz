<?php

namespace App\Enums\Transaction;

enum TypeEnum: string
{
    case ADVANCE = 'advance';
    case REFUND = 'refund';
    case FULL = 'full';
}
