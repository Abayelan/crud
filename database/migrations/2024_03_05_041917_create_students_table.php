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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); 
            $table->string('firstname'); 
            $table->string('lastname'); 
            $table->date('date_of_birth'); 
            $table->string('gender'); 
            $table->string('email')->unique(); 
            $table->bigInteger('phonenumber')->unique(); 
            $table->string('address'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
