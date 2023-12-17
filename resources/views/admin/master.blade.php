<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/dark-mystyle.css')}}">
	<title>Sarah Samei</title>
	{{-- links for Nunito font --}}
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

	<style>
		#niloofar.hover {
			color: green;
		}
	</style>
</head>
<body>

	{{-- navbar --}}
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

		<h1 class="navbar-brand" style="color:red; margin-left: 35px">Welcome Admin!</h1>
		{{--
		<a class="navbar-brand" href="{{url('/')}}" style="margin-left: 35px">HOME</a>
		<div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 20px;">
			<ul class="navbar-nav">
				<li class="nav-item" style="padding-left: 20px;">
					<a class="nav-link" href="{{url('/about_me')}}">ABOUT ME</a>
				</li>
				<li class="nav-item" style="padding-left: 20px;">
					<a class="nav-link" href="{{url('/mycode')}}">PROGRAMMING</a>
				</li>
				<li class="nav-item" style="padding-left: 20px;">
					<a class="nav-link" href="{{url('/draw')}}">DROWING</a>
				</li>
				<li class="nav-item" style="padding-left: 20px;">
					<a class="nav-link" href="{{url('/resin')}}">RESIN</a>
				</li>
				<li class="nav-item" style="padding-left: 20px;">
					<a class="nav-link" href="{{url('/food&cake')}}">FOOD & CAKE</a>
				</li>
			</ul>
		</div>
		--}}
	</nav>
	
	<div class="container text-center" style="margin-top: 50px; border: 1px solid black;">
		@yield('content')
	</div> {{-- end of container --}}

	<script src="{{asset('dist/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

</body>
</html>