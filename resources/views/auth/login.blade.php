@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				      <div class="mb-3">
				        <label for="exampleInputEmail1" class="form-label">Email address</label>
				        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}">

				      </div>
				
				      <div class="mb-3">
				        <label for="exampleInputPassword1" class="form-label">Password</label>
				        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
				      </div>
				
				      <div class="mb-3 form-check">
				        <input type="checkbox" class="form-check-input" id="exampleCheck1"name="remember">
				        <label class="form-check-label" for="exampleCheck1">Check me out </label>
				      </div>
				
				      <button type="submit" class="btn btn-warning">Login</button>
					  <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
				    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
