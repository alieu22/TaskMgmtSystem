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
            //
            // This migration file will allow us to update the user table in the database with more columns, RoleID and Role 
        Schema::table('users', function (Blueprint $table) { 
            $table->enum('role',['admin','user']) ->default('user'); // will add a role column into the user table

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
