<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePt2BlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt2_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('title');
            $table->longText('meta_desc');
            $table->longText('content');
            $table->string('post_image', 40);
            $table->boolean('isPublish')->default(1);
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
        Schema::dropIfExists('pt2_blog');
    }
}
