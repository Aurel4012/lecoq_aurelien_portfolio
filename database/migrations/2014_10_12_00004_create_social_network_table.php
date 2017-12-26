<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_network', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('id_user')->unsigned();
           $table->string('link_sn');
           $table->string('name_sn');
           $table->string('logo_sn');
           $table->timestamps();
           $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_network');
    }
}
