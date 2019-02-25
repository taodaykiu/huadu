<?php

namespace App\Admin\Controllers;

use App\News;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class NewsController extends Controller
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
            ->header('新闻')
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
            ->header('新闻')
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
            ->header('新闻')
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
        $grid = new Grid(new News);
        $grid->model()->orderBy('created_at', 'desc');
        $grid->id('Id');
        $grid->type('分类')->display(function ($v) {
            if ($v == 1) {
                return '公司新闻';
            }
            if ($v == 2) {
                return '行业新闻';
            }
            if ($v == 3) {
                return '常见问题';
            }
            if ($v == 4) {
                return '文件柜资讯';
            }
            if ($v == 5) {
                return '档案密集架';
            }
            if ($v == 6) {
                return '更衣柜';
            }
            if ($v == 7) {
                return '保险柜';
            }
            if ($v == 8) {
                return '校用家具';
            }
            if ($v == 9) {
                return '保密文件柜';
            }
            if ($v == 10) {
                return '智能密集柜';
            }
            if ($v == 11) {
                return '铁皮档案柜';
            }
        });
        $grid->title('标题');

        $grid->thumb('缩略图')->image();

        $grid->tag('标签');
        $grid->is_hot('热门')->display(function ($v) {
            return $v == 0 ? '否' : '是';
        });
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('title', '标题');

            $filter->equal('type','分类')->radio([
                1 => '公司新闻',
                2 => '行业新闻',
                3 => '常见问题',
                4 => '文件柜资讯',
                5 => '档案密集架',
                6 => '更衣柜',
                7 => '保险柜',
                8 => '校用家具',
                9 => '保密文件柜',
                10 => '智能密集柜',
                11 => '铁皮档案柜',
            ]);
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
        $show = new Show(News::findOrFail($id));

        $show->id('Id');
        $show->title('Title');
        $show->ly('Ly');
        $show->thumb('Thumb');
        $show->desc('Desc');
        $show->tag('Tag');
        $show->is_hot('Is hot');
        $show->data('Data');
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
        $form = new Form(new News);

        $form->text('title', '标题');
        $form->select('type', '分类')->options([
            1 => '公司新闻',
            2 => '行业新闻',
            3 => '常见问题',
            4 => '文件柜资讯',
            5 => '档案密集架',
            6 => '更衣柜',
            7 => '保险柜',
            8 => '校用家具',
            9 => '保密文件柜',
            10 => '智能密集柜',
            11 => '铁皮档案柜',
        ])->default(1);
        $form->text('ly', '来源');
        $form->image('thumb', '缩略图')->uniqueName();
        $form->text('desc', '描述');
        $form->text('tag', '标签');
        $form->radio('is_hot', '热门搜索')->options([0 => '否', 1 => '是']);
        $form->editor('data', '详情');

        return $form;
    }
}
