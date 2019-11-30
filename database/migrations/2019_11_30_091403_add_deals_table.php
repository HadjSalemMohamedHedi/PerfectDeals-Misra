<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->decimal('prix');
            $table->string('description');
            $table->float('valeur');
            $table->string('adresse');
            $table->string('phone');
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
        Schema::table('Deals', function (Blueprint $table) {
            Schema::dropIfExists('Deals');
        });
    }
}