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
            $table->id();
            $table->string('nom_client')->unique();
            $table->string('nom_contact')->unique();
            $table->string('fonction_contact');
            $table->string('type');
            $table->longText('adresse_facturation');
            $table->float('tva');
            $table->float('remise');
            $table->string('email_primaire');
            $table->string('email_secondaire');
            $table->longText('remarque');
            $table->string('mobile_phone');
            $table->string('code_client')->nullable();
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




