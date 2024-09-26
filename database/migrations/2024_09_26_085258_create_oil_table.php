<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
public function up(): void
{
    Schema::create('oil', function (Blueprint $table) {
        $table->id(); // Auto-incrementing ID
        $table->string('oil_name'); // Oil name as a string
        $table->string('car_type'); // Car type (e.g., SUV, Sedan)
        $table->string('car_model'); // Car model (e.g., Honda Civic)
        $table->year('manufacturing_year'); // Manufacturing year as a year type
        $table->string('engine_type'); // Engine type (e.g., V6, electric, etc.)
        $table->decimal('price', 8, 2); // Price of the oil with 8 digits and 2 decimal places
        $table->boolean('status')->default(1); // Status (e.g., 1 = active, 0 = inactive)
        $table->timestamps(); // Created at and updated at timestamps
    });
}


    public function down(): void
    {
        Schema::dropIfExists('oil');
    }
};
