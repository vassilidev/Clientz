<?php

namespace App\Models;

use App\Traits\Relations\BelongsTo\BelongsToAddress;
use App\Traits\Relations\BelongsTo\BelongsToClient;
use App\Traits\Relations\HasMany\HasManyTransactions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Appointment extends Model
{
    use HasFactory, BelongsToClient, BelongsToAddress, HasManyTransactions;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'url',
        'client_id',
        'address_id',
        'start_date',
        'end_date',
        'note',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'start_date' => 'datetime',
        'end_date'   => 'datetime',
    ];
}
