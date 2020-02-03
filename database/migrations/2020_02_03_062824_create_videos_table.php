<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{

    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->String('id');
            $table->String('Link');
            $table->String('title');
            $table->String('discription');
            $table->integer('price');
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
        Schema::dropIfExists('videos');
    }
}
