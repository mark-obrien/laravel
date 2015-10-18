@extends('app')

@section('page-title')
    {{  $user->name  }}
@stop

@section('content')
    <div id="main">
        <div class="page-header">
            <a href="{{ url('projects') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#account" aria-controls="account" role="tab" data-toggle="tab">Account</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tab-content-default">
                <div role="tabpanel" class="tab-pane active" id="account">
                    @include('account.form')
                </div>
            </div>
        </div>
    </div>
@stop
