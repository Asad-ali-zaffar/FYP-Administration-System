<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teacher', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_email');
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('department');
            $table->string('teacher_status');
            $table->string('teacher_image');
            $table->string('teacher_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
