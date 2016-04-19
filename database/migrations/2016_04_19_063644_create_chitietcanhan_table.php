<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietcanhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('chitietcanhan',function(Blueprint $table){
            $table->increments('chitietcanhanid');
            $table->text('sothich')->default('');
            $table->text('nangluc')->default('');
            $table->text('kynang')->default('');
            $table->text('trinhdo')->default('');
            $table->boolean('isPublic')->default(true);
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
        Schema::drop('chitietcanhan');
    }
}
