<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formuls', function (Blueprint $table) {
            $table->id();
            $table->string('nom_formules');
            $table->float('espace_disque');
            $table->string('espace_unite');
            $table->string('type');
            $table->string('cpu')->nullable();
            $table->float('nombre_mail');
            $table->float('prix', 8, 2);
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
        Schema::dropIfExists('formuls');
    }
}
