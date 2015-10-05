@extends('app')

@section('content')
	<div id="main">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login">
					<div class="logo" href="#"><i class="md md-lg md-multitrack-audio"></i> blueprint</div>
					<div class="panel panel-default panel-shadow">
						<form role="form" method="POST" action="/auth/login">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="panel-body">
								@if (count($errors) > 0)
									<div class="alert alert-danger">
										<strong>Whoops!</strong> There were some problems with your input.<br><br>
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								</div>
								<div class="form-group margin-none">
									<div class="media">
										<div class="media-body media-middle">
											<label for="password">Password</label>
										</div>
										<div class="media-right media-middle">
											<a href="#" class="small pull-right">Forgot?</a>
										</div>
									</div>
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary">Login <i class="md md-lock-open"></i></button>
							</div>
						</form>
					</div>
					<div class="text-center">
						<p class="text-muted">or register <a href="{{ url('auth/register') }}">here</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
