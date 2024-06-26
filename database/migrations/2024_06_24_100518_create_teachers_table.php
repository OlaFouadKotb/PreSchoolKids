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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName', 100);
            $table->string('image', 100);
            $table->string('phone', 100);
            $table->string('facebook', 100);
            $table->string('twitter', 100);
            $table->string('instagram', 100);
           //$table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade'); 
           $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
