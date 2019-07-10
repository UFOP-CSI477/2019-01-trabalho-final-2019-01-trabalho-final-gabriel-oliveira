<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_carrinhos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('produto_id');
            $table->integer('carrinho_id');
            $table->integer('quantia');
            $table->decimal('valorU', 10,2);
            $table->decimal('valorT', 10,2);
            $table->timestamps();

            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('carrinho_id')->references('id')->on('carrinhos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_carrinhos');
    }
}
