<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('title')

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		  <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Messages</a></li>
				<li><a class="nav-link active" aria-current="page" href="{{ url('/junk') }}">Junk</a></li>
				<li><a class="nav-link active" aria-current="page" href="{{ url('/send') }}">Send Messages</a></li>
			</ul>
		  </div>	
		</div>
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					@if (Auth::guest())
						<li><a class="nav-link active" href="{{ url('/auth/login') }}">Login</a></li>
						<li><a class="nav-link active" href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="nav-item dropdown ms-auto mb-2 mb-lg-0">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								{{ Auth::user()->name }}
							</a>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
							  <li><a class="dropdown-item" href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
					  </li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<div>
	@yield('content')
	</div>
</body>
</html>
