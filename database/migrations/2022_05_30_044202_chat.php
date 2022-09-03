<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chat extends Migration
{
    
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->text('from_user');
            $table->text('to_user');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('chat');
    }
    
}
