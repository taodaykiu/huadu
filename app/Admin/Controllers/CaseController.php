<?php

namespace App\Admin\Controllers;

use App\Algw;
use App\CaseCate;
use App\Cases;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CaseController extends Controller
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
            ->header('案例')
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
            ->header('案例')
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
            ->header('案例')
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
        $grid = new Grid(new Cases);
        $grid->model()->orderBy('created_at','desc');
        $grid->id('Id');
        $grid->cate_id('分类')->display(function ($v){
            return CaseCate::find($v)['name'];
        });
        $grid->algw_id('顾问')->display(function ($v){
            return Algw::find($v)['name'];
        });
        $grid->is_tj('是否推荐')->display(function ($v){
            return $v==0?'否':'是';
        });
        $grid->title('标题');
        $grid->thumb('缩略图')->image();
        $grid->author('作者');
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('title', '标题');

            $filter->equal('cate_id','分类')->select('/admin/api/getcasecate');
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
        $show = new Show(Cases::findOrFail($id));

        $show->id('Id');
        $show->cate_id('Cate id');
        $show->algw_id('Algw id');
        $show->title('Title');
        $show->desc('Desc');
        $show->thumb('Thumb');
        $show->data('Data');
        $show->author('Author');
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
        $form = new Form(new Cases);

        $form->select('cate_id', '分类')->options('/admin/api/getcasecate');
        $form->select('algw_id', '顾问')->options('/admin/api/getgw');
        $form->text('title', '标题');
        $form->text('desc', '描述');
        $form->text('author', '来源');
        $form->radio('is_tj', '推荐')->options([0=>'否',1=>'是']);
        $form->image('thumb', '缩略图')->uniqueName();
        $form->editor('data', '详情');


        return $form;
    }

    public function getcasecate()
    {
        return CaseCate::get(['id','name as text']);
    }

    public function getgw()
    {
        return Algw::get(['id','name as text']);
    }
}
