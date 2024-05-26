<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('badge', 20)->default('');
            $table->string('image', 200)->default('uploads/no image');
            // $table->string('instructor', 100)->default('null');
            $table->string('coursedetails', 500)->default('null');
            $table->string('courselevel', 20)->default('null');
            $table->integer('courselectures')->default(0);
            // $table->string('coursecatageory', 20)->default('null');
            // $table->unsignedBigInteger('instructor_id');
            // $table->foreign('instructor_id')->references('instructor_id')->on('instructor');
            // $table->unsignedBigInteger('catageory_id');
            // $table->foreign('catageory_id')->references('catageory_id')->on('course_catageory');
            $table->bigInteger('catageory_id');
            $table->bigInteger('instructor_id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
