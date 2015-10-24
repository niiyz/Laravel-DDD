<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeihiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keihi', function (Blueprint $table) {
            $table->increments('id');       // ID
            $table->char('title', 100);     // タイトル
            $table->integer('price');       // 価格
            $table->text('url');            // URL
            $table->timestamps();           // 作成時刻
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keihi');
    }
}
