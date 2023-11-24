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
        Schema::create('tasks', function (Blueprint $table) { // tells the database to create a table called task
            $table->id(); // creates an ID for the table as a primary key alreasy setup by laravel , known as the userID, each table will habe their unique ones 
            $table->timestamps(); // creates timestamps for the table, created by 
            $table->string('task_name'); // creates a task name column that will store the name of the task
            $table ->text('description') ->nullable(); // creates a description for the table as a text datatype, and specified as nullable to allow the column to contain null values
            $table ->dateTime('DueDate'); // creates a date of the duedate for the table as a DateTime datatype
            $table ->unsignedBigInteger('assignedTo'); // creates a assignedTo column (FK) that will house the user the task it assigned to
            $table ->unsignedBigInteger('createdBy'); // creates a createdby column (FK) that will house which user created the task
            $table ->enum('status',['in progress', 'not started', 'completed','deferred','closed', 'open']); // creates an enum column called status , are fixed can never be changed
            $table ->enum('priority',['low','medium','high','critical']);
            
            // Define foreign key relationships 
            $table->foreign('assignedTo')->references('id')->on('users'); // defines the assignedTo column as a foreign key that links to the userID
            $table->foreign('createdBy')->references('id')->on('users'); // defines the createdBy column as a foreign key that links to the userID



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_task');
    }
};
