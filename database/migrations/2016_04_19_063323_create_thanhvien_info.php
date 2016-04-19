<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhvienInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('thanhviens',function(Blueprint $table){
            $table->increments('thanhvienid');
            $table->integer('thongtincanhanid')->unsigned()->default(0);
            $table->foreign('thongtincanhanid')->references('thongtincanhanid')->on('thongtincanhan')->onDelete('cascade');
            $table->integer('chitietcanhanid')->unsigned()->default(0);
            $table->foreign('chitietcanhanid')->references('chitietcanhanid')->on('chitietcanhan')->onDelete('cascade');
            $table->integer('congtrinhnghiencuuid')->unsigned()->default(0);
            $table->foreign('congtrinhnghiencuuid')->references('congtrinhnghiencuuid')->on('congtrinhnghiencuu')->onDelete('cascade');
            $table->integer('detaithamgiaid')->unsigned()->default(0);
            $table->foreign('detaithamgiaid')->references('detaithamgiaid')->on('detaithamgia')->onDelete('cascade');
            $table->integer('groupid')->unsigned()->default(0);
            $table->foreign('groupid')->references('groupid')->on('groups')->onDelete('cascade');
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
        Schema::drop('thanhviens');
    }
}
