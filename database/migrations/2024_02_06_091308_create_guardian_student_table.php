<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('guardian_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('guardian_id');
            $table->unsignedInteger('student_id');
//            $table->foreign('guardian_id')->references('id')->on('guardians');
//            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('guardian_student');
    }
};
