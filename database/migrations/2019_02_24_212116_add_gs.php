<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sys', function (Blueprint $table) {
            //
            $table->string('gs')->nullable()->comment('公司');
            $table->string('bah')->nullable()->comment('备案号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sys', function (Blueprint $table) {
            //
        });
    }
}
