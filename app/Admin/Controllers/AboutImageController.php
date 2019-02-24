<?php

namespace App\Admin\Controllers;

use App\AboutImages;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AboutImageController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('图片展示')
            ->description('')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('图片展示')
            ->description('修改')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('图片展示')
            ->description('新增')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AboutImages);

        $grid->id('Id');
        $grid->image('图片')->image();
        $grid->name('标题');
        $grid->type('类型')->display(function ($v){
            if($v==1){
                return '工厂实景';
            }
            if($v==2){
                return '生产实力';
            }
            if($v==3){
                return '荣誉资质';
            }
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(AboutImages::findOrFail($id));

        $show->id('Id');
        $show->image('Image');
        $show->name('Name');
        $show->type('Type');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AboutImages);

        $form->image('image', '图片')->uniqueName();
        $form->text('name', '标题');
        $form->radio('type', '类型')->options([1=>'工厂实景',2=>'生产实力',3=>'荣誉资质'])->default(1);
        return $form;
    }
}
