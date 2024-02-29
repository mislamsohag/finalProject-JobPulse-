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
        Schema::create('cv_education', function (Blueprint $table) {
            $table->id();
            $table->string('degree', 50);
            $table->string('school_university', 100);
            $table->string('department', 50)->nullable();
            $table->string('group', 50)->nullable();
            $table->string('passing_year', 20);
            $table->string('CGPA', 20);
           
            $table->unsignedBigInteger('user_id');
           
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_education');
    }
};
