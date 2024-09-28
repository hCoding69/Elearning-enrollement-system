<?php

namespace App\Admin\Controllers;

use App\Models\Client;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ClientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Client';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Client());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('country', __('Country'));
        $grid->column('phone', __('Phone'));
        $grid->column('occupation', __('Occupation'));
        $grid->column('university_level', __('University level'));
        $grid->column('is_admin', __('Is admin'))->using([
            '0'=>'non',
            '1'=>'oui'
        ]);
        $grid->column('created_at', __('Created at'))->hide();
        $grid->column('updated_at', __('Updated at'))->hide();

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
        $show = new Show(Client::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('country', __('Country'));
        $show->field('phone', __('Phone'));
        $show->field('occupation', __('Occupation'));
        $show->field('university_level', __('University level'));
        $show->field('is_admin', __('Is admin'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Client());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('country', __('Country'));
        $form->mobile('phone', __('Phone'));
        $form->text('occupation', __('Occupation'));
        $form->number('university_level', __('University level'));
        $form->switch('is_admin', __('Is admin'));

        return $form;
    }
}
