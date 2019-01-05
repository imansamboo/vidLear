<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('job')->nullable();
            $table->string('bio')->nullable();
            $table->string('site')->nullable();
            $table->string('telegram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('day');
            $table->dropColumn('month');
            $table->dropColumn('year');
            $table->dropColumn('job');
            $table->dropColumn('bio');
            $table->dropColumn('site');
            $table->dropColumn('telegram');
            $table->dropColumn('linkedin');
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
        });
    }
}
