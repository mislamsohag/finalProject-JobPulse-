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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', 1000);
            $table->string('response', 1000);
            $table->string('benefits',500);
            $table->string('education');
            $table->string('qualification');
            $table->string('experience');
            $table->string('job_location');
            $table->string('salary');
            $table->string('deadline');
            
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('category_id')->references('id')->on('categories')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('company_id')->references('id')->on('companies')
                ->cascadeOnUpdate()->restrictOnDelete();
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
        Schema::dropIfExists('jobs');
    }
};
