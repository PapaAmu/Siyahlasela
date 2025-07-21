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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();

            // Personal Information
            $table->string('full_name');          // Required
            $table->string('email')->unique();
            $table->string('phone');           // Required
            $table->enum('gender', ['Male', 'Female']);
            $table->string('age')->nullable(); // Optional if DOB is provided
            $table->text('home_address');      // Required
            // Church Information
            $table->string('church_name');               
            $table->string('church_location');
            $table->string('pastor_name');              
            $table->string('pastor_contact');
            // Emergency / Next of Kin
            $table->string('next_of_kin_name');           // Required
            $table->string('next_of_kin_relationship')->nullable();
            $table->string('next_of_kin_phone');          // Required
            // Application Status
            $table->enum('status', ['Pending', 'Active', 'Inactive'])->default('Pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
