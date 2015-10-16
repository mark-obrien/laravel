@extends('app')

@section('page-title')
    Projects
@stop

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <?php $count = 0; ?>
                <div class="row project-group">
                    @foreach($projects as $project)
                        @if($count == 0)
                            <div class="col-sm-4">
                                <div class="project-item add-project">
                                    <a href="{{ action('ProjectsController@create') }}" class="project-title"><i class="md md-collections"></i>Add Project</a>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-4">
                                <div class="project-item">
                                    <a href="{{ action('ProjectsController@show', [$project->slug]) }}" class="project-image">
                                        <img src="{{$project->projectLogo->location . '/' . $project->projectLogo->title}}" alt="project" class="img-responsive"/>
                                    </a>
                                    <a href="{{ action('ProjectsController@show', [ $project->slug]) }}" class="project-title">{{ $project->title }}</a>
                                </div>
                            </div>
                        @endif
                        <?php $count++; ?>
                        @if($count % 3 == 0)
                            </div><div class="row project-group">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop