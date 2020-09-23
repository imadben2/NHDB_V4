<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relances', function (Blueprint $table) {
            $table->id('id_relances');
            $table->float('jours_n');
            $table->string('sujet_relances');
            $table->string('msg_relances');
            $table->string('piece_jointe');
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
        Schema::dropIfExists('relances');
    }
}
