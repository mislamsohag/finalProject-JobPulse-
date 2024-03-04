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
        Schema::create('cv_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skills', 500);
            $table->string('current_salary', 20)->nullable();
            $table->string('expected_salary', 20);
           
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
        Schema::dropIfExists('cv_skills');
    }
};
