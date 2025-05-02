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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ← ADD THIS
            $table->decimal('total_hours', 8, 2);   // ← ADD THIS
            $table->decimal('salary_per_hour', 8, 2); // ← ADD THIS
            $table->decimal('salary', 10, 2);       // ← ADD THIS
            $table->decimal('sss', 10, 2)->default(0);
            $table->decimal('pagibig', 10, 2)->default(0);
            $table->decimal('philhealth', 10, 2)->default(0);
            $table->decimal('other_deduction', 10, 2)->default(0);
            $table->decimal('total_deductions', 10, 2); // ← ADD THIS
            $table->decimal('net_salary', 10, 2);   // ← ADD THIS
            $table->timestamps();

            // Optional: Add foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};

