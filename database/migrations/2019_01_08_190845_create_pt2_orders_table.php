<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePt2OrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt2_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('price');
            $table->timestamp('date')->nullable();
            $table->string('shamsi_date', 40)->nullable();
            $table->string('payment_result', 50)->nullable();
            $table->longText('au')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pt2_orders');
    }
}
