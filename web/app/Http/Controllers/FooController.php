<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\FooRepository;

class FooController extends Controller {

//    public function __construct(FooRepository $repository)
//    {
//        $this->repository = $repository;
//    }

	public function foo(FooRepository $repository)
    {
        return $repository->get();
    }

}
