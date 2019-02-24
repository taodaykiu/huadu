<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cate_id')->comment('分类id');
            $table->foreign('cate_id')->references('id')->on('case_cates')->onDelete('cascade');
            $table->unsignedInteger('algw_id')->comment('顾问id');
            $table->foreign('algw_id')->references('id')->on('algws')->onDelete('cascade');
            $table->string('title')->comment('标题');
            $table->string('desc')->comment('描述');
            $table->string('thumb')->comment('缩略图');
            $table->longText('data')->comment('详情');
            $table->string('author')->comment('作者');
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
        Schema::dropIfExists('cases');
    }
}
