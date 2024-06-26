<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsTable extends Migration
{
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing unsigned BIGINT primary key
            $table->string('name', 100); // String column 'name' with max length 100
            $table->date('birthday'); // Date column 'birthday'
            $table->tinyInteger('age'); // Tiny integer column 'age'
            //$table->unsignedBigInteger('class_id'); // Unsigned big integer 'class_id'
            //$table->unsignedBigInteger('guardian_id'); // Unsigned big integer 'guardian_id'
            $table->boolean('active')->default(true); // Boolean column 'active' with default value true
            $table->string('image')->nullable(); // Nullable string column 'image' for storing image path
            $table->softDeletes(); // Adds soft delete column 'deleted_at'
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns

            // Foreign key constraints
             //$table->foreign('class_id')->references('id')->on('coursees')->onDelete('cascade');
            // $table->foreign('guardian_id')->references('id')->on('guardians')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kids');
    }
}
