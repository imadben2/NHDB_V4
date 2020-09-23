<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonements', function (Blueprint $table) {
            $table->id('id_abonements');
            $table->date('date_expiration');
            $table->date('duree_abonements');
            $table->string('prix_facutre');
            $table->string('nom_utilisateur');
            $table->string('mot_de_pass');
            $table->string('remarque');
            $table->string('facture_proforma');
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
        Schema::dropIfExists('abonements');
    }
}
