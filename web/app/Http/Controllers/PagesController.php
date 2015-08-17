<?php namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller {

	public function about(){

       $people = [
           'Taylor', 'Mark', 'Derp'
       ];

        return view('pages.about', compact('people'));

    }

    public function contact(){

        return view('pages.contact');

    }
}
