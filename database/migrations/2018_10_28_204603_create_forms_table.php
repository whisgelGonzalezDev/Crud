<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->rememberToken();
            $table->timestamps();
            $table->increments('id');
            $table->integer('Amarre');
            $table->char('Embarcacion');
            $table->char('Empleados');
            $table->char('Pertenece' );
            $table->char('Propietario');
            $table->char('Socio');
            $table->char('Zonas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
