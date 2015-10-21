@extends('app')

@section('page-title')
    Create A Project
@stop

@section('content')
    <div id="main">
        <div class="page-header">
            <a href="{{ url('projects') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
        </div>
        <div role="tabpanel">
            <!-- Tab panes -->
            <div class="tab-content tab-content-default">
                <div role="tabpanel" class="tab-pane active" id="account">
                    @include('projects.form')
                </div>
            </div>
        </div>
    </div>
@stop

