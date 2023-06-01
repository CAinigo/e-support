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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('sname')->nullable();
            $table->date('bday')->nullable();
            $table->string('c_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('zone')->nullable();
            $table->string('e_status')->nullable();
            $table->string('biz_name')->nullable();
            $table->string('biz_type')->nullable();
            $table->string('contact')->unique()->nullable();
            $table->timestamp('contact_verified_at')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('role'); // Users: 0=>admin, 1=>Sub-admin/officials, 2=>bhw, 3=>residents, 4=>company, 5=>forResidentApproval, 5=>forCompanyApproval
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
