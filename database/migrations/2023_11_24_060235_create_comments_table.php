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
        // builds the comments table
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // acts as the comment ID
            $table->unsignedBigInteger('taskID'); // will act as the foreign key that references the taskID
            $table->timestamps();
            $table->foreign('taskID')->references('id')->on('tasks'); // says the taskID we made will refer to the taskID in the tasks table 
            $table->text('comment_text')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
