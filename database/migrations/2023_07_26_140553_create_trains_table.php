<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('Azienda');
            $table->string('Stazione di Partenza');
            $table->string('Stazione di Arrivo');
            $table->date('Data di Partenza');
            $table->time('Orario di Partenza');
            $table->time('Orario di Arrivo');
            $table->smallInteger('Codice Treno')->nullable();
            $table->tinyInteger('Numero Carrozze')->nullable();
            $table->boolean('In Orario')->default(1);
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
};
