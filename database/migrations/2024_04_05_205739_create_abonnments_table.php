<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abonnments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number_cources');
            $table->unsignedInteger('price');
            $table->unsignedInteger('number_days');
            $table->enum('type',['Free','premiume','vip']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnments');
    }
};
