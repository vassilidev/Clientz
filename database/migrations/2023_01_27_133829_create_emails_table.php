<?php

use App\Models\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('emails', function (Blueprint $table): void {
            $table->id();
            $table->string('label');
            $table->string('email_address');
            $table->bigInteger('position');
            $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unique(['label', 'email_address', 'client_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};