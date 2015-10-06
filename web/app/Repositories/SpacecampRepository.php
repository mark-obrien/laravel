<?php

namespace App\Repositories;

abstract class SpacecampRepository{

    protected $model;

    public function create(array $attr)
    {
        return call_user_func("{$this->model}::create", array($attr));
    }

    public function all(array $columns)
    {
        return call_user_func("{$this->model}::all", array($columns));
    }

    public function find($id, array $columns)
    {
        return call_user_func("{$this->model}::find", array($id, $columns));
    }

    public function destroy($ids)
    {
        return call_user_func("{$this->model}::destroy", array($ids));
    }

}