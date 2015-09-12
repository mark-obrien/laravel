@extends('app')
@section('page-title')
    Timeline
@stop
@section('content')
<div id="main">
    <div class="page-header">
        <h1>Clients <a href="#" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></h1>
    </div>
    <div class="panel panel-shadow">
        <div class="panel-body">
            <form class="form-inline filter">
                <span class="bold text-muted">Filter</span>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox1" type="checkbox" checked>
                        <label for="checkbox1">
                            Student
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox">
                        <label for="checkbox2">
                            VIP
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <select id="basic" class="selectpicker show-tick form-control" data-live-search="false">
                        <option>Company A</option>
                        <option>Company B</option>
                        <option>Company C</option>
                        <option>Company D</option>
                        <option>Company E</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default-dark  pull-right">Search</button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="text-uppercase">
                <th class="text-center">Date</th>
                <th>Full Name</th>
                <th class="text-center">Student</th>
                <th class="text-center">VIP</th>
                <th>Works at</th>
                <th class="text-center">Invoices</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-muted text-uppercase text-center">06 jan</td>
                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                <td class="text-center">
						<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                </td>
                <td class="text-center">
                    <i class="md md-clear text-muted"></i>
                </td><div id="main">
                    <div class="page-header">
                        <h1>Clients <a href="#" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></h1>
                    </div>
                    <div class="panel panel-shadow">
                        <div class="panel-body">
                            <form class="form-inline filter">
                                <span class="bold text-muted">Filter</span>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox" checked>
                                        <label for="checkbox1">
                                            Student
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">
                                            VIP
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select id="basic" class="selectpicker show-tick form-control" data-live-search="false">
                                        <option>Company A</option>
                                        <option>Company B</option>
                                        <option>Company C</option>
                                        <option>Company D</option>
                                        <option>Company E</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default-dark  pull-right">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="text-uppercase">
                                <th class="text-center">Date</th>
                                <th>Full Name</th>
                                <th class="text-center">Student</th>
                                <th class="text-center">VIP</th>
                                <th>Works at</th>
                                <th class="text-center">Invoices</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-muted text-uppercase text-center">06 jan</td>
                                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                                <td class="text-center">
						<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td>
                                    <a href="#">Blue Ltd.</a>
                                </td>
                                <td class="text-center">
                                    <a href="#">4 <i class="md md-insert-drive-file text-muted"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="account.html" class="btn btn-xs btn-icon btn-primary"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-icon btn-default"><i class="md md-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted text-uppercase text-center">06 jan</td>
                                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                                <td class="text-center">
						<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td>
                                    <a href="#">Blue Ltd.</a>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td class="text-center">
                                    <a href="account.html" class="btn btn-xs btn-icon btn-primary"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-icon btn-default"><i class="md md-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted text-uppercase text-center">06 jan</td>
                                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                                <td class="text-center">
							<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td>
                                    <a href="#">Blue Ltd.</a>
                                </td>
                                <td class="text-center">
                                    <a href="#">1 <i class="md md-insert-drive-file text-muted"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="account.html" class="btn btn-xs btn-icon btn-primary"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-icon btn-default"><i class="md md-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted text-uppercase text-center">06 jan</td>
                                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                                <td class="text-center">
							<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td>
                                    <a href="#">Blue Ltd.</a>
                                </td>
                                <td class="text-center">
                                    <a href="#">1 <i class="md md-insert-drive-file text-muted"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="account.html" class="btn btn-xs btn-icon btn-primary"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-icon btn-default"><i class="md md-delete"></i></a>
                                </td>
                            </tr>
                            <tr class="active">
                                <td class="text-muted text-uppercase text-center">06 jan</td>
                                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                                <td class="text-center">
							<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td>
                                    <a href="#">Blue Ltd.</a>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td class="text-center">
                                    <a href="account.html" class="btn btn-xs btn-icon btn-primary"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-icon btn-default"><i class="md md-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted text-uppercase text-center">06 jan</td>
                                <td><a href="account.html" class="text-regular">Andrew Brain</a>
                                    <a href="email.html" class="text-muted"><i class="md md-email"></i></a></td>
                                <td class="text-center">
							<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td>
                                    <a href="#">Blue Ltd.</a>
                                </td>
                                <td class="text-center">
                                    <i class="md md-clear text-muted"></i>
                                </td>
                                <td class="text-center">
                                    <a href="account.html" class="btn btn-xs btn-icon btn-primary"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-icon btn-default"><i class="md md-delete"></i></a>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
        </table>
    </div>
</div>
@stop