<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFypCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fyp_committee', function (Blueprint $table) {
            $table->id('com_id');
            $table->string('com_member_name');
            $table->string('com_member_desigination');
            $table->string('com_datails');
            $table->unsignedbiginteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('department');
            $table->unsignedbiginteger('teacher_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('tbl_teacher');
            $table->string('com_status');
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
        Schema::dropIfExists('fyp_committee');
    }
}
