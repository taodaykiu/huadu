<?php

namespace App\Admin\Controllers;

use App\Cate;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ProductCateController extends Controller
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
            ->header('产品分类')
            ->description('列表')
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
            ->header('产品分类')
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
            ->header('产品分类')
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
        $grid = new Grid(new Cate);
        $grid->model()->orderBy('created_at','desc');
        $grid->id('Id');
        $grid->name('分类名称');
        $grid->type('分类类型')->display(function ($v){
            return $v==1?'普通分类':'专题分类';
        });
        $grid->pid('上级分类')->display(function ($v){
            return Cate::find($v)['name'];
        });
        $grid->image('分类图片')->image(config('app.url').'/uploads/', 50, 50);
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
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
        $show = new Show(Cate::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->pid('Pid');
        $show->image('Image');
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
        $form = new Form(new Cate);

        $form->text('name', '分类名称');
        $form->select('type', '分类类型')->options([null=>'请选择',1=>'普通分类',2=>'专题分类'])->load('pid','/admin/api/getcate');
        $form->select('pid', '上级分类')->options( function ($ids) {
            if ($ids == null) {
                return [
                  'name' => '',
                  'id' => null
                ];
            }
            return Cate::find($ids)->pluck('name', 'id');
        });
        $form->text('desc', '专题描述');
        $form->image('image', '分类图片')->uniqueName();

        return $form;
    }

    public function getcate(Request $request)
    {
        $provinceId = $request->get('q');
        $list = [
            [
                'id' => 0,
                'text' => '顶级'
            ]
        ];
        $lists = Cate::where('type',$provinceId)->where('pid',0)->get(['id','name as text']);

        $collection = collect([$list,$lists]);

        $collapsed = $collection->collapse();

        $collapsed->all();

        return $collapsed;
    }
}
