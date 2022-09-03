<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocate_teacher', function (Blueprint $table) {
            $table->id('allocate_teacher_id');
            $table->foreignId('teacher_id')->references('teacher_id')->on('tbl_teacher');
            $table->foreignId('std_id')->references('std_id')->on('student');
            $table->string('allocate_teacher_status');
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
        Schema::dropIfExists('allocate_teacher');
    }
}
