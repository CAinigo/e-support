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
            $table->string('display_picture')->nullable();
            $table->date('bday')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contact')->unique()->nullable();
            $table->timestamp('contact_verified_at')->nullable();
            $table->string('zone')->nullable();
            $table->string('e_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('family_head')->nullable();
            $table->string('biz_name')->nullable();
            $table->string('biz_address')->nullable();
            $table->string('biz_nature')->nullable();
            $table->string('biz_lname')->nullable();
            $table->string('biz_fname')->nullable();
            $table->string('biz_mname')->nullable();
            $table->string('biz_sname')->nullable();
            $table->string('biz_display_picture')->nullable();
            $table->string('biz_clearance')->nullable();
            $table->string('biz_email')->unique()->nullable();
            $table->timestamp('biz_email_verified_at')->nullable();
            $table->string('biz_contact')->unique()->nullable();
            $table->timestamp('biz_contact_verified_at')->nullable();
            $table->tinyInteger('role'); // Users: 0=>admin, 1=>Sub-admin/officials, 2=>bhw, 3=>residents, 4=>company, 5=>forResidentApproval, 6=>forCompanyApproval
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
