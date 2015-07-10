<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Person;

class NamesController extends BaseController {


    public function getIndex(){

        $people = Person::all();

        return view('names.index', array('people' => $people));
    }

    public function getCreate(){

        return view('names.create', array());

    }

    public function postCreate(){

        $name = Input::get('name');

        Person::create(['name' => $name]);

        return Redirect::to('names');

    }

}