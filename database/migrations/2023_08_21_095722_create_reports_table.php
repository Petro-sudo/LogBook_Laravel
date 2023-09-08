<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
//$table->string('user_email');
            $table->unsignedBigInteger('user_id');
          //  $table->foreign('user_email')->references('email')->on('users');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('hours')->nullable();
            $table->string('taskDescrition', 3000)->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};