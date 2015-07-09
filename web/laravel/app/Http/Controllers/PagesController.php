<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class PagesController extends BaseController
{
    public function getHello(){

        $name = DB::table('people')->pluck('name');

        return view('hello', array('name' => $name));
    }

    public function postHello(){

    }

}



