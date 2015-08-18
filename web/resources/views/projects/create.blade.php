@extends('app')
@section('content')
<div id="main">
    <div class="page-header">
        <h2>Create A Project</h2>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default panel-shadow">
                <div class="panel-body">
                    <h4 class="margin-t-none">Input Variants</h4>
                    @include('projects.form')
                </div>
            </div>
        </div>
    </div>
@stop

