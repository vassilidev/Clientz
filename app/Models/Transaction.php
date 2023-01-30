<?php

namespace App\Models;

use App\Enums\Transaction\PaymentMethod;
use App\Enums\Transaction\TypeEnum;
use App\Traits\Relations\BelongsTo\BelongsToAppointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, BelongsToAppointment;

    /**
     * @var string[]
     */
    protected $fillable = [
        'appointment_id',
        'type',
        'amount',
        'payment_method',
        'payment_link',
        'send_at',
        'paid_at',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'type' => TypeEnum::class,
        'amount' => 'int',
        'payment_method' => PaymentMethod::class,
        'send_at' => 'datetime',
        'paid_at' => 'datetime',
    ];
}
