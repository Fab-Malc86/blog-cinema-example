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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title', 150);
            $table->unsignedBigInteger('category_id');
            $table->string('description', 250)->nullable();
            $table->text('body')->nullable();
            $table->string('img', 250)->nullable();
            $table->boolean('visible')->default(true);
            // $table->unsignedInteger('views')->default(0); consiglio di Giuseppe per un counter di visualizzazioni degli articoli
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
