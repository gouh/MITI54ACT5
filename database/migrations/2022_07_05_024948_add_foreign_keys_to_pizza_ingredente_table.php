<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPizzaIngredenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pizza_ingredente', function (Blueprint $table) {
            $table->foreign(['fk_ingrediente'], 'pizza_ingredente_fk')->references(['ingrediente_id'])->on('ingrediente');
            $table->foreign(['fk_pizza'], 'pizza_pizza_fk')->references(['pizza_id'])->on('pizza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pizza_ingredente', function (Blueprint $table) {
            $table->dropForeign('pizza_ingredente_fk');
            $table->dropForeign('pizza_pizza_fk');
        });
    }
}
