<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tickes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
             $table->string('description');
             $table->decimal('prix');
             $table->decimal('valeur');
            $table->string('adresse');
            $table->string('phone');
            $table->date('date');
            $table->time('Horaire');
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
        Schema::table('Tickes', function (Blueprint $table) {
            Schema::dropIfExists('Tickes');

        });
    }
}
