@extends('app')

@section('page-title')
    Projects
@stop

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="row product-group">
                    @foreach($projects as $project)
                        <div class="col-sm-4">
                            <div class="product-item">
                                <a href="{{ action('ProjectsController@show', [$project->id]) }}" class="product-image">
                                    <img src="{{$project->projectFile->location . '/' . $project->projectFile->title}}" alt="product" class="img-responsive"/>
                                </a>
                                <a href="{{ action('ProjectsController@show', [ $project->id]) }}" class="product-title">{{ $project->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop