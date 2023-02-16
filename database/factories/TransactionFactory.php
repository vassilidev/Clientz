<?php

namespace Database\Factories;

use App\Enums\Transaction\PaymentMethod;
use App\Models\Appointment;
use App\Models\Transaction;
use App\Traits\Factories\HasModel;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaction>
 */
class TransactionFactory extends Factory
{
    use HasModel;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        $startDate = fake()->dateTime();
        $paymentMethod = match (random_int(1,3)) {
            1 => PaymentMethod::CARD,
            2 => PaymentMethod::CASH,
            3 => fake()->randomElements([PaymentMethod::LINK, PaymentMethod::CHEQUE]),
        };

        return [
            'appointment_id' => $this->getModel(Appointment::class)->id,
            'amount' => fake()->randomElements([25,50,75,100,125,150,175,200]),
            'payment_method' => $paymentMethod,
            'payment_link' => $paymentMethod === PaymentMethod::LINK ? fake()->url() : null,
            'send_at' => $startDate,
            'paid_at' => fake()->boolean(33) ? Carbon::parse($startDate)->addDays(random_int(1, 30)) : null,
        ];
    }
}
