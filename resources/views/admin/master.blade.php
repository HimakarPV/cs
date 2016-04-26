<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<!---->
	<meta name="description" content="">
	<meta name="autor" content="">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>ADMIN</title>
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top ">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Social Authentication</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{route('public.home')}}">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(!Auth::check())
					<li><a href="{{route('auth.login')}}">Login</a></li>
					<li><a href="{{route('auth.register')}}">Register</a></li>
					@else
					<li><a href="#">{{Auth::user()->name}}</a></li>
					<li><a href="{{route('authenticated.logout')}}">Logout</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		    @yield('content')
	</div>
</body>

  {!! Html::style('css/app.css') !!}
</html>