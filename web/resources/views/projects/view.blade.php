@extends('app')

@section('page-title')
    {{  $project->title  }}
@stop

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default panel-shadow">
                    <div class="media">
                        <div class="media-left">
                            <div class="panel-body">
                                <div class="width-100">
                                    <h5 class="text-muted margin-none">Discussions</h5>

                                    <h2 class="margin-none">
                                        7
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="media-body add">
                            <div class="pull-right width-150">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default panel-shadow">
                    <div class="media">
                        <div class="media-left">
                            <div class="panel-body">
                                <div class="width-100">
                                    <h5 class="text-muted margin-none">Files</h5>

                                    <h2 class="margin-none">
                                        8
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="media-body add">
                            <div class="pull-right width-150">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default panel-shadow">
                    <div class="media">
                        <div class="media-left">
                            <div class="panel-body">
                                <div class="width-100">
                                    <h5 class="text-muted margin-none">To-dos</h5>

                                    <h2 class="margin-none">
                                        8
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="media-body add">
                            <div class="pull-right width-150">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="media">
            <div class="media-body clearfix-xs width-100">
                <div class="panel panel-shadow">
                    <div class="panel-heading">
                        <div class="pull-right btn-group">
                            <a href="#" class="btn btn-default btn-vertical">2014</a>
                            <a href="#" class="btn btn-default btn-vertical"><i class="md md-today md-lg text-muted"></i></a>
                        </div>
                        <h4 class="headline">
                            Stats
                        </h4>
                    </div>
                    <div class="ct-chart ct-chart-animated-line" style="height: 200px; padding-right:15px; overflow: hidden"></div>
                </div>
            </div>
            <div class="media-right clearfix-xs">
                <div class="panel bg-primary text-center width-300">
                    <div class="h3 margin-b-none">
                        January
                    </div>
                    <div class="h4 margin-t-none light">Total number of sales</div>
                    <div class="panel-body">
                        <i class="fa fa-calendar fa-4x"></i>
                        <div class="h1"> &dollar; 132,562</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="headline">Latest Stats <i class="md md-credit-card"></i></h4>
                <ul class="list-group list-group-list">
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted width-50">
                                    06 Jan
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#" class="text-regular">Andrew Brain</a>
                            </div>
                            <div class="media-right">
                                <div class="bold text-primary">
                                    &dollar;19,281
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media media-middle">
                            <div class="media-left">
                                <div class="text-muted width-50">
                                    06 Jan
                                </div>
                            </div>
                            <div class="media-body">

                                <a href="#" class="text-regular">Andrew Brain</a>

                            </div>
                            <div class="media-right">
                                <div class="bold text-primary">
                                    &dollar;19,281
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted width-50">
                                    06 Jan
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#" class="text-regular">Andrew Brain</a>
                            </div>
                            <div class="media-right">
                                <div class="bold text-primary">
                                    &dollar;19,281
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted width-50">
                                    06 Jan
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#" class="text-regular">Andrew Brain</a>
                            </div>
                            <div class="media-right">
                                <div class="bold text-primary">
                                    &dollar;19,281
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted width-50">
                                    06 Jan
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="#" class="text-regular">Andrew Brain</a>
                            </div>
                            <div class="media-right">
                                <div class="bold text-primary">
                                    &dollar;19,281
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="media">
                    <a href="finances.html" class="btn btn-primary bold">view all</a>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="headline">Top 3 <i class="md md-account-circle"></i></h4>
                <div class="panel panel-shadow">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/people/110/guy-8.jpg" width="85" alt="guy">
                        </div>
                        <div class="media-body media-middle">

                            <a href="#" class="text-regular">Andrew Brain</a>
                            <div class="text-muted">
                                54 Sales
                            </div>
                        </div>
                        <div class="media-right media-middle">
                            <div class="h3 margin-none text-muted width-150 text-right panel-body">
                                &dollar; 19,281
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-shadow">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/people/110/guy-5.jpg" width="85" alt="guy">
                        </div>
                        <div class="media-body media-middle" style="width:100%">
                            <a href="#" class="text-regular">Adrian Demian</a>
                            <div class="text-muted">
                                24 Sales
                            </div>
                        </div>
                        <div class="media-right media-middle">
                            <div class="h3 margin-none text-muted width-150 text-right panel-body">
                                &dollar; 12,475
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel panel-shadow">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/people/110/guy-6.jpg" width="85" alt="guy">
                        </div>
                        <div class="media-body media-middle" style="width:100%">
                            <a href="#" class="text-regular">Johnny Tall</a>
                            <div class="text-muted">
                                10 Sales
                            </div>
                        </div>
                        <div class="media-right media-middle">
                            <div class="h3 margin-none text-muted width-150 text-right panel-body">
                                &dollar; 5,311
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="headline">Overdue Invoices <i class="md md-description"></i></h4>
                <div class="panel panel-default panel-shadow">
                    <table class="table table-bordered">
                        <tr>
                            <td class="bold text-primary">
                                &dollar;1,281
                            </td>
                            <td>
                                <a href="#" class="text-regular">
                                    #12791 - Blue Ltd
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-download text-muted"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold text-primary">
                                &dollar;11,581
                            </td>
                            <td>
                                <a href="#" class="text-regular">
                                    #12791 - Name Ltd
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-download text-muted"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold text-primary">
                                &dollar;10,121
                            </td>
                            <td>
                                <a href="#" class="text-regular">
                                    #12791 - Company Ltd
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-download text-muted"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="headline">Demographic <i class="md md-location-on"></i></h4>
                <div id="world-map-gdp" style="height: 200px; display: block; margin-bottom:20px; border:1px solid #ddd; border-radius:3px;"></div>
            </div>
        </div>
    </div>
@stop