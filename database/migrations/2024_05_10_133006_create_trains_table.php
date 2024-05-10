<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('train_code', 10);
            $table->string('agency', 50)->nullable();
            $table->string('departure_station', 100)->nullable();
            $table->string('arrival_station', 100)->nullable();
            $table->dateTime('departure_time', $precision = 0)->nullable();
            $table->dateTime('arrival_time', $precision = 0)->nullable();
            $table->integer('carriage_number')->nullable();
            $table->boolean('in_time')->default(1)->nullable();
            $table->boolean('deleted')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
