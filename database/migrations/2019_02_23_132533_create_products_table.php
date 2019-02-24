<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->comment('产品类型');
            $table->unsignedInteger('level1')->comment('一级分类id');
            $table->unsignedInteger('level2')->comment('二级分类id')->nullable();
            $table->foreign('level1')->references('id')->on('cates')->onDelete('cascade');
            $table->foreign('level2')->references('id')->on('cates')->onDelete('cascade');
            $table->string('title')->comment('标题');
            $table->text('pp')->comment('品牌');
            $table->text('ys')->comment('颜色');
            $table->text('gg')->comment('规格');
            $table->string('td')->comment('特点');
            $table->longText('images')->comment('图片');
            $table->longText('data')->comment('详情');
            $table->integer('is_tj')->comment('推荐产品');
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
        Schema::dropIfExists('products');
    }
}
