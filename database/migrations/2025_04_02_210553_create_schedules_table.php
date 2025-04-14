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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('shift');
            $table->time('shift_start');
            $table->time('shift_end');
            $table->enum('status', ['present', 'absent', 'late', 'none'])->default('none'); // Added 'none' to enum options
            $table->enum('request', ['early_out', 'late_in', 'none'])->default('none'); // Added 'none' to enum options
            $table->enum('schedule', ['morning', 'afternoon', 'evening']);
            $table->text('request_reason')->nullable();
            $table->boolean('request_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
