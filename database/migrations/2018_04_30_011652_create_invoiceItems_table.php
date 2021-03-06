<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoiceItems', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('product_id')->unsigned();
          $table->integer('invoice_id')->unsigned();
          $table->integer('quantity')->nullable();
          $table->boolean('taxed')->default(0);
          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('invoice_id')->references('id')->on('invoices');
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
        Schema::dropIfExists('invoiceItems');
    }
}
