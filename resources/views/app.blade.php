<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sugestões de Melhoria</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style="margin: 10px;">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}">Sugestões de Melhoria</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					@if(Auth::check())
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastros<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('customerSize.index') }}">Porte do Cliente</a></li>
								<li><a href="{{ route('importance.index') }}">Importância</a></li>
								<li><a href="{{ route('difficulty.index') }}">Dificuldade</a></li>
								{{-- <li role="separator" class="divider"></li> --}}
							</ul>
						</li>
						<li><a href="{{ route('improvement.index') }}">Sugestões</a></li>
					</ul>
					@endif
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('improvement.onlyTrashed') }}">Sugestões Excluídas</a></li>
								{{-- <li role="separator" class="divider"></li> --}}
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>

		@yield('content')

		<!-- Scripts -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
	</html>
