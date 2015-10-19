@extends('app')

@section('page-title')
    Calendar
@stop

@section('content')
    <div id="main">
        <div class="media">
            <div class="media-body">
                <!-- Calendar -->
                <div id='calendar'></div>
            </div>
            <div class="media-right clearfix-xs">
                <div class="width-300">
                    <h4 class="headline text-center">This Month's Summary</h4>
                    <div id="this-month-event-list"></div>
                    <p class="text-center">
                        <a href="#" class="btn btn-orange bold" id="addEvent">Add New Event <i class="fa fa-plus"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop