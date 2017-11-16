<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('idNext')->nullable();
            $table->integer('idProject')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->string('code',3000);
            $table->dateTime('created_at');
            $table->foreign('idProject')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('areas');
    }
}
