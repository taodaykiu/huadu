<?php

namespace App\Admin\Controllers;

use App\Sys;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SysController extends Controller
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
            ->header('网站设置')
            ->description(' ')
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
            ->header('网站设置')
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
            ->header('网站设置')
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
        $grid = new Grid(new Sys);

        $grid->id('Id');
        $grid->logo('Logo')->image();
        $grid->title('网站标题');
        $grid->keywords('关键字');
        $grid->desc('网站描述');
        $grid->tel('电话');
        $grid->phone('手机号');
        $grid->qq('QQ');
        $grid->gs('公司');
        $grid->bah('备案号');


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
        $show = new Show(Sys::findOrFail($id));

        $show->id('Id');
        $show->logo('Logo');
        $show->title('Title');
        $show->keywords('Keywords');
        $show->desc('Desc');
        $show->tel('Tel');
        $show->phone('Phone');
        $show->qq('Qq');
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
        $form = new Form(new Sys);

        $form->image('logo', 'Logo')->uniqueName();
        $form->image('code', '二维码')->uniqueName();
        $form->text('title', '网站标题');
        $form->text('url', '网站网址');
        $form->text('keywords', '关键字');
        $form->text('desc', '描述');
        $form->text('tel', '电话');
        $form->mobile('phone', '手机');
        $form->text('qq', 'QQ');
        $form->text('gs', '公司');
        $form->text('bah', '备案号');
        $form->text('dtlj', '百度商桥动态链接');
        $form->text('address', '公司地址');
        $form->text('about', '关于花都');

        return $form;
    }
}
