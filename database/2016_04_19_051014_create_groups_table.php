<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('groups',function(Blueprint $table){
            $table->increments('groupid');
            $table->string('tengroup')->default('');
            $table->text('chitietnhom')->default('');
            $table->integer('sothanhvien')->unsigned()->default(1);
            $table->integer('truongnhomid')->unsigned()->default(0);
            $table->boolean('isPublic')->default(true);
            $table->integer('postid')->unsigned()->default(0);
            $table->foreign('postid')->references('postid')->on('posts')->onDelete('cascade');
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
        Schema::drop('groups');
    }
}
