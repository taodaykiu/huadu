<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable()->comment('logo');
            $table->string('title')->nullable()->comment('网站标题');
            $table->string('keywords')->nullable()->comment('关键字');
            $table->string('desc')->nullable()->comment('网站描述');
            $table->string('tel')->nullable()->comment('电话');
            $table->string('phone')->nullable()->comment('手机');
            $table->string('qq')->nullable()->comment('qq');
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
        Schema::dropIfExists('sys');
    }
}
