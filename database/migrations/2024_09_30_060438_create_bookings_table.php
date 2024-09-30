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
        Schema::create('bookings', function (Blueprint $table) {
                $table->id();
                $table->string('firstname'); 
                $table->string('lastname');  
                $table->string('pnumber'); 
                $table->string('email'); 
                $table->text('appointment_details')->nullable(); 
                $table->string('location'); 
                $table->date('appointment_date'); 
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
