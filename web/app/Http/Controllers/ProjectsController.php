<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Jobs\CreateFile;
use App\Jobs\CreateProject;
use App\Http\Requests\ProjectRequest;
use Auth;
use Validator;
use Laracasts\Flash\Flash;
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
		$projects = Auth::user()->projects;
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
	public function store(ProjectRequest $request)
	{

		$validator = Validator::make($request->all(), $request->rules());

		if ($validator->fails()) {
			return redirect('projects/create')
				->withErrors($validator)
				->withInput();
		}

		if ($request->hasFile('image')){
			$file = $this->dispatch(new CreateFile($request->file('image')));
		}

		$this->dispatch(new CreateProject($request, Auth::user(), $file));


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
