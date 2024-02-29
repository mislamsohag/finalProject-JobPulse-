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
        Schema::create('cv_basics', function (Blueprint $table) {
            $table->id();
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->string('n_id', 50);
            $table->string('blood_group',20)->nullable();
            $table->string('passport', 50)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('github', 100)->nullable();
            $table->string('behance', 100)->nullable();
            $table->string('portfolio', 100)->nullable();
           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('account_id');
           
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('account_id')->references('id')->on('accounts')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_basics');
    }
};
