<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_detail', function (Blueprint $table) {
            $table->id('project_detail_id');
            $table->foreignId('proj_id')->references('proj_id')->on('project');
            $table->string('proj_idea');
            $table->string('existing_system');
            $table->longText('abstract');
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
        Schema::dropIfExists('project_detail');
    }
}
