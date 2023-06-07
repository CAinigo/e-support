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
        Schema::create('barangay_officials', function (Blueprint $table) {
            $table->id();
            $table->string('profile_img')->nullable();
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname')->nullable();
            $table->string('zone');
            $table->string('gender');
            $table->string('contact');
            $table->string('email');
            $table->string('c_status');
            $table->date('bday');
            $table->string('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangay_officials');
    }
};
