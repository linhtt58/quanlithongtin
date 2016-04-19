<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongtrinhnghiencuuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('congtrinhnghiencuu',function (Blueprint $table){
            $table->increments('congtrinhnghiencuuid');
            $table->string('tencongtrinh')->default('');
            $table->text('chitietcongtrinh')->default('');
            $table->datetime('ngaythangthamgia');
            $table->datetime('ngaythangketthuc');
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
        Schema::drop('congtrinhnghiencuu');
    }
}
