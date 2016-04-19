<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtincanhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('thongtincanhan',function (Blueprint $table){
            $table->increments('thongtincanhanid');
            $table->string('hovaten')->default('');
            $table->datetime('ngaythangnamsinh');
            $table->text('diachi')->default('');
            $table->string('dienthoai')->default('');
            $table->string('email')->default('');
            $table->boolean('isPublic')->default(true);
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
        //
        Schema::drop('thongtincanhan');
    }
}
