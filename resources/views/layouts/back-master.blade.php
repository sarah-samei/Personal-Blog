<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
	<title></title>
	<style>
		body {background-color: #00ffff;}
		h1 {text-align: center;}
	</style>
</head>
<body>
	<h1>Welcome To My Website</h1>

	<a href="{{url('/resin')}}">RESIN</a>

	@yield('content')

	<div class="container text-center">
		<div class="row">

		<div class="col-6 col-sm-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="{{asset('dist/img/resin.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="{{url('/resin')}}" class="btn btn-primary">RESIN</a>
				</div>
			</div>
		</div>


		<div class="col-6 col-sm-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="{{asset('dist/img/images.jpeg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="{{url('/draw')}}" class="btn btn-primary">DRAW</a>
				</div>
			</div>
		</div>


		<div class="w-100 d-none d-md-block"></div>

		<div class="col-6 col-sm-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="{{asset('dist/img/code.jpeg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="{{url('/mycode')}}" class="btn btn-primary">MYCODE</a>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="{{asset('dist/img/cake.jpeg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="{{url('/food&cake')}}" class="btn btn-primary">FOOD & CAKE</a>
				</div>
			</div>

		</div>
	</div>


<div class="container text-center">
  <div class="row">

    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="w-100 d-none d-md-block"></div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

  </div>
</div>

	<script src="{{asset('dist/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
</body>
</html>