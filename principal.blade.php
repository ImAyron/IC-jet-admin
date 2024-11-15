<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!--CSS-->
	<link rel="stylesheet" href="/css/painel.css" />

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	<title>Principal</title>
</head>

<body>

	<div class="menu">
		<ul class="nav bg-dark">
			<li class="nav-item col-1 text-center">

			</li>

			<li class="nav-item col text-center">


				</a>
			</li>

			<li class="nav-item col text-center">
				<a href="{{route('dashboard')}}">

				</a>
			</li>




			@guest
			<li class="nav-item ">
				<a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
			</li>
			@if (Route::has('register'))
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
			</li>
			@endif
			@else
			<ul class="nav bg-dark">
			<li class="nav-item col-1 text-center">

			</li>

			

			<li class="nav-item col ">
				<a href="{{route('dashboard')}}">

						<button class="btn btn-success">Dashboard</button>

				</a>
			</li>
		
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle btn-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->name }}
				</a>

				<div class="dropdown-menu dropdown-menu-right btn-danger" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</li>
			@endguest
		</ul>
	</div>
	<!--Menu-->

	<div class="clear"></div>




	<!-- https://laravel.com/docs/8.x/responses#redirecting-with-flashed-session-data //-->
	@if(session('mensagem'))

	<div class="alert alert-success">
		{{ session('mensagem') }}
	</div>

	@endif

	<!-- https://laravel.com/docs/8.x/blade#defining-a-layout //-->
	<!-- CONTEUDO DA PAGINA //-->
	@yield('conteudo')

	<div>
		



	</div>
	<!--<img src="/img/principal.jpg" class="img-fluid" alt="Imagem responsiva">-->
	<div class="container">
		<div class="row align-items-start">
		  <div class="col">
			One of three columns
		  </div>
		  <div class="col">
			One of three columns
		  </div>
		  <div class="col">
			One of three columns
		  </div>
		</div>
		<div class="row align-items-center">
		  <div class="col">
			One of three columns
		  </div>
		  <div class="col">
			One of three columns
		  </div>
		  <div class="col">
			One of three columns
		  </div>
		</div>
		<div class="row align-items-end">
		  <div class="col">
			One of three columns
		  </div>
		  <div class="col">
			One of three columns
		  </div>
		  <div class="col">
			One of three columns
		  </div>
		</div>
	  </div>


	<!--jQuery-->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>