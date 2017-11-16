<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('idProyecto');
            $table->string('nombre')->unique();
            $table->string('colaboradores');
            $table->string('admin');
           
        });
         
       
    }

    
    public function down()
    {
        Schema::drop('proyectos');
    }
}
