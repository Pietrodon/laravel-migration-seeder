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
            $table->string('azienda',100);
            $table->string('stazione_di_partenza',100);
            $table->string('stazione_di_arrivo',100);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('numero_treno');
            $table->string('numero_carrozze');
            $table->boolean('in_orario')->unsigned()->default(true);
            $table->tinyInteger('cancellato')->unsigned()->default(0);
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
