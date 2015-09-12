@extends('app')
@section('content')
<div id="main">
    @section('page-title')
        Create A Project
    @stop
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default panel-shadow">
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h4 class="margin-t-none">Input Variants</h4>
                    @include('projects.form')
                </div>
            </div>
        </div>
    </div>
@stop

