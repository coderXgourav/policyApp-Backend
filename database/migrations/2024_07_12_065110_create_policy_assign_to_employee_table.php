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
        Schema::create('policy_assign_to_employee', function (Blueprint $table) {
            $table->id('policy_assign_to_employee_id');
            $table->string('main_department_id');
            $table->string('main_employee_id');
            $table->string('main_policy_id');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_assign_to_employee');
    }
};
