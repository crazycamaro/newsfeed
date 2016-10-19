<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->unique('title');
            $table->unique(array('title','description', 'image'));
            $table->unique(array('title','description'));
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
