@extends('app')

@section('content')
	<div id="main">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="signup">
					<div class="logo"><i class="md md-lg md-email"></i> Reset Password</div>
					<div class="panel panel-default panel-shadow">
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
						<form role="form" method="POST" action="/password/email">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="panel-body">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input type="email" class="form-control" name="email" placeholder="Name" value="{{ old('email') }}">
								</div>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-success bold">Send Password Reset Link</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
