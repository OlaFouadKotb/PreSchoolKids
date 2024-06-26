<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create the courses table
        Schema::create('coursees', function (Blueprint $table) {
            $table->id();
            $table->string('course_name', 100);
            $table->string('teacherName', 100);
            // $table->string('title', 100);
            $table->decimal('price', 8, 2)->change();
            $table->unsignedTinyInteger('age');
            $table->time('time');
            $table->unsignedTinyInteger('capacity');
            $table->string('TeacherImage', 100)->nullable();
            $table->softDeletes();
            $table->timestamps();

            // Foreign key constraint for teacher
           // $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });

        // Create the class_kid table (pivot table)
        // Schema::create('class_kid', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('course_id');
        //     $table->unsignedBigInteger('kid_id');
        //     $table->timestamps();

            // Foreign key constraints
    //         $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
    //         $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
    //     });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //Schema::dropIfExists('class_kid');
        Schema::dropIfExists('courses');
    }
}
