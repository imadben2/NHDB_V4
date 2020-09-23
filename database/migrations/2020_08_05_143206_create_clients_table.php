<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id_clients');
            $table->string('nom_client');
            $table->string('nom_contact');
            $table->string('fonction_contact');
            $table->longText('adresse_facturation');
            $table->float('tva');
            $table->float('remise');
            $table->string('email_primaire');
            $table->string('email_secondaire');
            $table->longText('remarque');
            $table->string('mobile_phone');
            $table->string('code_client');
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
        Schema::dropIfExists('clients');
    }
}
