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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->unsignedFloat('price');
            $table->integer('avalable_seetes');
            $table->string('image');
            $table->date('date');
            $table->Time('start_time');
            $table->Time('end_time');
            $table->foreignId('classes_id')->constrained('classes');
            $table->unique(['start_time','end_time','classes_id']);
        
            $table->boolean('accepted')->default(false);
            $table->foreignId('fillier_id')->constrained('filliers');
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
