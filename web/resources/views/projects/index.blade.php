@extends('app')

@section('page-title')
    Projects
@stop

@section('content')
    @foreach($projects as $project)
        <article>
            <h2><a href="{{ action('ProjectsController@show', [ $project->id]) }}">{{ $project->name }}</a></h2>
            <div class="article-body">{{ $project->name }}</div>
        </article>
    @endforeach
@stop