<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts',function(Blueprint $table){
            $table->increments('postid');
            $table->string('noidungpost')->default('');
            $table->integer('nguoirepid')->unsigned()->default(0);
            $table->text('noidungrep')->default('');
            $table->datetime('ngaygiorep');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('posts');
    }
}
