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
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname')->nullable();
            $table->date('bday');
            $table->string('c_status');
            $table->string('gender');
            $table->string('zone');
            $table->string('e_status');
            $table->string('contact')->unique();
            $table->timestamp('contact_verified_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('role')->default(5); // Users: 0=>admin, 1=>Sub-admin/officials, 2=>bhw, 3=>residents, 4=>company, 5=>forApproval
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
