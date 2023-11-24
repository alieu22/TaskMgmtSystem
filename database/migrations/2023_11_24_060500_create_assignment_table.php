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
    // builds the assignment table 
    {
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('taskID'); // will act as the foreign key that references the taskID in the tasks table
            $table->unsignedBigInteger('userID'); // will act as the foreign key that references the userID in the users table

            $table->foreign('taskID')->references('id')->on('tasks');
            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment');
    }
};
