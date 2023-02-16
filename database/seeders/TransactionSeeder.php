<?php

namespace Database\Seeders;

use App\Enums\Transaction\PaymentMethod;
use App\Enums\Transaction\TypeEnum;
use App\Models\Appointment;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        Appointment::query()->whereNotNull('total_amount')->get()->each(static function (Appointment $appointment) {
            if (fake()->boolean(80)) {
                $appointment->transactions()->create([
                    'type' =>   TypeEnum::FULL,
                    'amount' => $appointment->total_amount,
                    'sent_at' => $appointment->end_date,
                    'paid_at' => $appointment->end_date,
                ]);
            } else if (fake()->boolean(80)) {
                $due = $appointment->total_amount;
                $firstPayment = random_int($due * 0.3, $due);

                $firstTransaction = $appointment->transactions()->create([
                    'type' =>   TypeEnum::ADVANCE,
                    'amount' => $firstPayment,
                    'sent_at' => $appointment->end_date,
                    'paid_at' => $appointment->end_date,
                ]);

                $sentAtSecondTransaction = $firstTransaction->sent_at->addDays(random_int(1,15));

                $appointment->transactions()->create([
                    'type' =>   TypeEnum::FULL,
                    'amount' => $due - $firstPayment,
                    'sent_at' => $sentAtSecondTransaction,
                    'paid_at' => $sentAtSecondTransaction->addDays(random_int(1,5)),
                ]);
            } else {
                $due = $appointment->total_amount;
                $firstPayment = random_int($due * 0.5, $due);

                $firstTransaction = $appointment->transactions()->create([
                    'type' =>   TypeEnum::ADVANCE,
                    'amount' => $firstPayment,
                    'sent_at' => $appointment->end_date,
                    'paid_at' => $appointment->end_date,
                ]);

                $sentAtSecondTransaction = $firstTransaction->sent_at->addDays(random_int(1,15));
                $due -= $firstPayment;
                $secondPayment = $due * (random_int(1100,1300) / 1000);
                // payer 2nd et trop d'argent
                $secondTransaction = $appointment->transactions()->create([
                    'type' =>   TypeEnum::FULL,
                    'amount' => $secondPayment,
                    'sent_at' => $sentAtSecondTransaction,
                    'paid_at' => $sentAtSecondTransaction->addDays(random_int(1,5)),
                ]);

                $tomorrowPaid = $secondTransaction->paid_at->addDay();

                $appointment->transactions()->create([
                    'type' =>   TypeEnum::REFUND,
                    'amount' => $firstPayment + $secondPayment - $appointment->total_amount,
                    'sent_at' => $tomorrowPaid,
                    'paid_at' => $tomorrowPaid,
                ]);
            }
        });
    }
}
