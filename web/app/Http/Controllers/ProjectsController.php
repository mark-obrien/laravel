<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Jobs\CreateFile;
use App\Jobs\CreateProject;
use Illuminate\Http\Request;
use Auth;
use Laracasts\Flash\Flash;
use SpaceCamp\Projects\Project;
use SpaceCamp\Files\File;
use Input;

class ProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->middleware('auth');
	}

	public function index()
	{
		$projects = Project::all();
		return view('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * @param $request
	 * @return Response
	 */
	public function store(Request $request)
	{

		$this->dispatch(new CreateProject($request, Auth::user()));

		if ($this->request->hasFile('image')){
			$this->dispatch(new CreateFile($this->request->hasFile('image')));
        }

		Flash::overlay('Your New Project Has Been Created');
		return redirect('projects');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
