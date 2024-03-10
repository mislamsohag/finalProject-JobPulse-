<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('currentSalary', 20)->nullable();
            $table->string('expectedSalary', 20);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('company_id');

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->foreign('account_id')->references('id')->on('accounts')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->foreign('job_id')->references('id')->on('jobs')
                ->cascadeOnUpdate()->restrictOnDelete();
                
            $table->foreign('company_id')->references('id')->on('companies')
                ->cascadeOnUpdate()->restrictOnDelete();

           $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applied_jobs');
    }
};
