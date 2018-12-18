<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('tax_payment');
            $table->dropColumn('total_payment');
            $table->dropColumn(' sub_total_payment');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->decimal('sub_total_payment', 18, 2)->default(0);
            $table->decimal('tax_payment', 18, 2)->default(0);
            $table->decimal('total_payment', 18, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('tax_payment');
            $table->dropColumn('price');
            $table->dropColumn(' sub_total_payment');
            $table->decimal('sub_total_payment', 18, 2);
            $table->decimal('tax_payment', 18, 2);
            $table->decimal('total_payment', 18, 2);
        });
    }
}
