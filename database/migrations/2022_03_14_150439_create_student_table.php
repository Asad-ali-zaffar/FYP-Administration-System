<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('std_id');
            $table->string('std_name');
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('department');
            $table->string('std_address');
            $table->string('std_reg_no')->unique();
            $table->string('email')->unique();
            $table->bigInteger('std_phone_num')->unique();
            $table->bigInteger('std_semster_no');
            $table->unsignedBigInteger('prog_id');
            $table->foreign('prog_id')->references('prog_id')->on('program');
            $table->unsignedBigInteger('std_session_id');
            $table->foreign('std_session_id')->references('ses_id')->on('session');
            $table->string('std_password');
            $table->string('std_status');
            $table->string('std_image');
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
        Schema::dropIfExists('student');
    }
}
