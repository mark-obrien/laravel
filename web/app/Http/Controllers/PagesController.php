<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Models\User;
use Auth;

class PagesController extends Controller {

    /*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling all default pages.
	|
	*/

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()){
            return redirect('projects');
        }
    }

    public function everyone()
    {
        $users = User::paginate(15);
        return view('pages.everyone')->with(compact('users'));
    }

	public function about()
    {
       $people = [
           'Taylor', 'Mark', 'Derp'
       ];

        return view('pages.about', compact('people'));

    }

    public function calendar()
    {
        return view('pages.calendar');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
