<?php

namespace App\Admin\Controllers;

use App\Cate;
use App\Product;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ProductController extends Controller
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
            ->header('产品列表')
            ->description()
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
            ->header('产品列表')
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
            ->header('产品列表')
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
        $grid = new Grid(new Product);
        $grid->model()->orderBy('created_at','desc');
        $grid->id('Id');
        $grid->model()->where('type',1);
        $grid->level1('产品分类')->display(function ($v){
            return Cate::find($v)['name'];
        });
        $grid->level2('产品分类')->display(function ($v){
            return Cate::find($v)['name'];
        });
        $grid->title('标题');
        $grid->images('图片')->image(config('APP_URL').'/uploads/',50,50);
        $grid->is_tj('是否推荐');
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->filter(function($filter){
            $list =  Cate::wherePid(0)->whereType(1)->get();

            foreach ($list as $v){
                $lists[$v->id] = $v->name;
            }
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('title', '名称');
            $filter->equal('level1','分类')->select($lists);

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
        $show = new Show(Product::findOrFail($id));

        $show->id('Id');
        $show->type('Type');
        $show->level1('Level1');
        $show->level2('Level2');
        $show->title('Title');
        $show->pp('Pp');
        $show->ys('Ys');
        $show->gg('Gg');
        $show->td('Td');
        $show->images('Images');
        $show->data('Data');
        $show->is_tj('Is tj');
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
        $form = new Form(new Product);

        $form->hidden('type', 'Type')->value(1);
        $form->select('level1', '产品分类1')->options('/admin/api/getlevel1')->load('level2','/admin/api/getlevel2');
        $form->select('level2', '产品分类2');
        $form->text('title', '产品标题');
        $form->text('pp', '品牌');
        $form->text('ys', '颜色');
        $form->text('gg', '规格');
        $form->text('td', '特点')->help('例如：全钢结构，静电喷涂|拆装结构，安装方便。多个请用   |  分隔');
        $form->multipleImage('images', '图片')->uniqueName()->removable();;
        $form->editor('data', '详情');
        $form->radio('is_tj', '是否推荐')->options([0=>'否',1=>'是'])->default(0);

        return $form;
    }

    public function getlevel1(Request $request)
    {
        return Cate::whereType(1)->wherePid(0)->get(['id','name as text']);
    }

    public function getlevel2(Request $request)
    {
        $q = $request->q;
        return Cate::whereType(1)->wherePid($q)->get(['id','name as text']);
    }
}
