<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cates', function (Blueprint $table) {
            //
            $table->string('desc')->after('image')->comment('描述')->nullable();
            $table->integer('type')->after('image')->comment('类型')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cates', function (Blueprint $table) {
            //
        });
    }
}
