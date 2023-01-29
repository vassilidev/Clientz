<?php

use App\Models\Phone;
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
        Schema::create('phonables', static function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Phone::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->morphs('ownable');
            $table->bigInteger('position')->nullable();
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
        Schema::dropIfExists('phonables');
    }
};
