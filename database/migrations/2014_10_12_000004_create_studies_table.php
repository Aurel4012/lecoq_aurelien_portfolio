<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
             $table->increments('id');
           $table->integer('id_user')->unsigned();
           $table->string('description_stud');
           $table->string('certif_stud');
           $table->string('org_stud');
           $table->date('begin_date_stud');
           $table->date('end_date_stud');
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
        Schema::dropIfExists('studies');
    }
}
