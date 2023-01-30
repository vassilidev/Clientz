<?php

use App\Enums\Transaction\PaymentMethod;
use App\Enums\Transaction\TypeEnum;
use App\Models\Appointment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('transactions', static function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Appointment::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('type', array_column(TypeEnum::cases(), 'value'));
            $table->integer('amount');
            $table->enum('payment_method', array_column(PaymentMethod::cases(), 'value'));
            $table->string('payment_link')->nullable();
            $table->dateTime('sent_at');
            $table->dateTime('paid_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
