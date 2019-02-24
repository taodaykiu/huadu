<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlgwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bm')->comment('部门');
            $table->string('image')->comment('头像');
            $table->string('name')->comment('姓名');
            $table->string('zw')->comment('职位');
            $table->string('qm')->comment('签名');
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
        Schema::dropIfExists('algws');
    }
}
