<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techno', function (Blueprint $table) {
             $table->increments('id');
           $table->integer('id_user')->unsigned();
           $table->string('lab_tech');
           $table->string('logo_tech');
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
        Schema::dropIfExists('techno');
    }
}
