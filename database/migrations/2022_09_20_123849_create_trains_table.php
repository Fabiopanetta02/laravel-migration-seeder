<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100);
            $table->float('Orario di partenza', 4, 2);
            $table->float('Orario di arrivo', 4, 2);
            $table->string('Codice treno', 20);
            $table->tinyInteger('Numero carrozze')->unisgned();
            $table->boolean('In orario')->default(1);
            $table->boolean('Cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
