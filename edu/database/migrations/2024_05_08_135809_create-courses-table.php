<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('badge', 20)->default('');
            $table->string('image', 200)->default('uploads/no image');
            $table->string('instructor', 100)->default('null');
            $table->string('coursedetails', 500)->default('null');
            $table->string('courselevel', 20)->default('null');
            $table->integer('courselectures')->default(0);
            $table->string('coursecatageory', 5000)->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
