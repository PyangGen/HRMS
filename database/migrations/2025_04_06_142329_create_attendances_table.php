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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('schedule_id')->nullable(); // Added this line
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->decimal('hours', 5, 2)->nullable(); // Decimal for fractional hours
            $table->enum('request', ['none', 'early_out', 'late_in', 'overtime'])->default('none'); // Fixed typo
            $table->text('request_reason')->nullable();
            $table->enum('request_approved', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('status')->default('none');
            $table->decimal('overtime_hours', 5, 2)->nullable();
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('set null');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
