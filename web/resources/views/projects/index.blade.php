@extends('app')

@section('page-title')
    Projects
@stop

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-sm-12">
                <?php $count = 1; ?>
                <div class="row project-group">
                    @if(count($projects) == 0)
                        <div class="col-sm-4">
                            <div class="project-item add-project">
                                <a href="{{ action('ProjectsController@create') }}" class="project-title"><i class="md md-collections"></i>Add Project</a>
                            </div>
                        </div>
                    @else
                        <div class="col-sm-4">
                            <div class="project-item add-project">
                                <a href="{{ action('ProjectsController@create') }}" class="project-title"><i class="md md-collections"></i>Add Project</a>
                            </div>
                        </div>
                        @foreach($projects as $project)
                            <div class="col-sm-4">
                                <div class="project-item">
                                    <a href="{{ action('ProjectsController@show', [$project->slug]) }}" class="project-image">
                                        <img src="{{$project->projectLogo->location . '/' . $project->projectLogo->title}}" alt="project" class="img-responsive"/>
                                    </a>
                                    <a href="{{ action('ProjectsController@show', [ $project->slug]) }}" class="project-title">{{ $project->title }}</a>
                                </div>
                            </div>
                            <?php $count++; ?>
                            @if($count % 3 == 0)
                                </div><div class="row project-group">
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop