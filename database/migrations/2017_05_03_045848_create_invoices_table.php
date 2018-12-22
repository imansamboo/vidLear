<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->string('status')->default('unpaid');
            $table->string('sender');
            $table->decimal('sub-total_payment', 18, 2);
            $table->decimal('tax_payment', 18, 2);
            $table->decimal('total_payment', 18, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
        });

        Schema::create('invoice_details', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('invoice_id')->unsigned();
          $table->integer('product_id')->unsigned();
          $table->integer('quantity')->unsigned();
          $table->decimal('price', 10, 2)->unsigned();
          $table->decimal('fee', 10, 2)->unsigned();
          $table->decimal('total_price', 18, 2);
          $table->timestamps();

          $table->foreign('invoice_id')->references('id')->on('invoices');
          $table->foreign('product_id')->references('id')->on('products');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
        Schema::dropIfExists('invoices');
    }
}
