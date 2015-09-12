<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;

class PagesController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::user()){
            return redirect('projects');
        }
    }

    public function clientListing(){
        return view('pages.client-listing');
    }

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
