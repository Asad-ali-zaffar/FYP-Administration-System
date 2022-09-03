<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFypParposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fyp_parposals', function (Blueprint $table) {
            $table->id('parposals_id');
            $table->string('senderId');
            $table->string('receiverId');
            $table->text('description');
            $table->string('file')->nullable();
            $table->string('video')->nullable();            
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
        Schema::dropIfExists('fyp_parposals');
    }
}
