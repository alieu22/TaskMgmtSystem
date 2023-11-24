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
        // builds the filter criteria table
        Schema::create('filter_criteria', function (Blueprint $table) {
            $table->id(); // primary key ID 
            $table->timestamps();
            $table->unsignedBigInteger('userID'); // will act as the foreign key to refer to the userID in the users table
            $table->string('criteria_Name');
            $table->string('description')->nullable();  // specifies to the user what the filter criterion they chose does
            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filter_criteria');
    }
};
