<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class NamesController extends BaseController {


    public function getIndex(){

        $people = DB::table('people')->get();

        return view('names.index', array('people' => $people));
    }

    public function getCreate(){

        return view('names.create', array());

    }

    public function postCreate(){

        $name = Input::get('name');

        DB::table('people')->insert(array('name' => $name));

        return Redirect::to('names');

    }

}