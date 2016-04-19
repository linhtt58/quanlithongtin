<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaithamgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detaithamgia',function(Blueprint $table){
            $table->increments('detaithamgiaid');
            $table->string('tendetai')->default('');
            $table->text('chitietdetai')->default('');
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
        Schema::drop('detaithamgia');
    }
}
