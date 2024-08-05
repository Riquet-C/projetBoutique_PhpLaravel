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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pictureUrl')->nullable();
            $table->string('descProducts');
            $table->integer('price');
            $table->integer('weight');
            $table->unsignedBigInteger('categoryId'); // Clé étrangère
            $table->foreign('categoryId')->references('id')->on('categories'); // Définition de la clé étrangère
            $table->integer('discount')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
