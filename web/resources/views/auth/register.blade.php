@extends('app')

@section('content')
<div id="main">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="signup">
				<div class="logo"><i class="md md-lg md-person-add"></i> Sign Up</div>
				<div class="panel panel-default panel-shadow">
					<div class="avatar">
						<img src="images/guy.jpg" alt="guy" class="img-circle img-responsive"/>
					</div>
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
					<form role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="panel-body">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
							</div>
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<div class="form-group margin-none">
								<label for="password_confirmation">Confirm Password</label>
								<input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Confirm Password">
							</div>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-success bold">Create Account</button>
						</div>
					</form>
				</div>
				<div class="text-center">
					<p class="text-muted">or connect with</p>
					<a href="#" class="btn btn-default btn-rounded"><i class="fa fa-facebook fa-fw"></i></a>
					<a href="#" class="btn btn-default btn-rounded"><i class="fa fa-twitter fa-fw"></i></a>
					<a href="#" class="btn btn-default btn-rounded"><i class="fa fa-google-plus fa-fw"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
