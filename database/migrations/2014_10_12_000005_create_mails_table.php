<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
             $table->increments('id');
           $table->integer('id_user')->unsigned();
           $table->string('from_mails');
           $table->string('name_mails');
           $table->string('last_name_mails');
           $table->string('subject_mails');
           $table->string('message_mails');
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
        Schema::dropIfExists('mails');
    }
}
