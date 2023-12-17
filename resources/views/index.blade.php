@extends('layouts.master')

@section('content')

	{{-- biography. --}}
	<div class="row" style="padding-top: 25px">
		<div class="col">
			<h1 style="color: #ffffff;">Hi, I'm Sarah!</h1>
			<p style="color: #ffffff; font-size: 30px;">I'm a web developer who shares intresting topics about code and technology.</p>
			<p style="color: #ffffff; font-size: 30px;"> Creating artworks with Resin, drawing, Kdrama and inventing new flavours are my habits!</p>
		</div>
	</div>

	{{-- 4 cards --}}
	<div class="row" style="padding-top: 40px;">

		{{-- Resin card --}}
		<div class="col h-100 d-flex align-items-center justify-content-center" style="margin-top: 15px;">
			<div class="card" style="width: 18rem; border: 1px solid #00ffff">
				<img class="card-img-top" src="{{asset('dist/img/resin.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">MY HAND'S ART</h5>
					<p class="card-text">The artworks I have created using resin and other materials.</p>
					<a href="{{url('/resin')}}" class="btn" style="background-color: #32325d; color: white;">RESIN ART</a>
				</div>
			</div>
		</div>

		{{-- Draw card --}}
		<div class="col h-100 d-flex align-items-center justify-content-center" style="margin-top: 15px;">
			<div class="card" style="width: 18rem; border: 1px solid #00ffff">
				<img class="card-img-top" src="{{asset('dist/img/drawings/drawing-items.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">MY IMAGINATION</h5>
					<p class="card-text">If you likes drawing, let's have a look at mine too!</p>
					<a href="{{url('/draw')}}" class="btn" style="background-color: #32325d; color: white;">DRAWING</a>
				</div>
			</div>
		</div>

		{{-- <div class="w-100"></div> --}}

		{{-- Writing card --}}
		<div class="col h-100 d-flex align-items-center justify-content-center" style="margin-top: 15px;">
			<div class="card" style="width: 18rem; border: 1px solid #00ffff">
				<img class="card-img-top" src="{{asset('dist/img/my_writings/laptop.jpg')}}" alt="Card image cap" style="height: 284px;">
				<div class="card-body">
					<h5 class="card-title">MY WRITINGS</h5>
					<p class="card-text">I'll share my daily exeperience in programming and technology here.</p>
					<a href="{{url('/writing')}}" class="btn" style="background-color: #32325d; color: white;">CODE & TECH</a>
				</div>
			</div>
		</div>

		{{-- Food & cake card --}}
		<div class="col h-100 d-flex align-items-center justify-content-center" style="margin-top: 15px;">
			<div class="card" style="width: 18rem; border: 1px solid #00ffff">
				<img class="card-img-top" src="{{asset('dist/img/cake/chocolate-cake.jpeg')}}" alt="Card image cap" style="width: 285px; height: 284px;">
				<div class="card-body">
					<h5 class="card-title">MY INNOVATION</h5>
					<p class="card-text">Follow me here if you like inventing new flavours in food, cake.</p>
					<a href="{{url('/food&cake')}}" class="btn" style="background-color: #32325d; color: white;">FOOD & CAKE</a>
				</div>
			</div>
		</div>

	</div> {{-- end of row of 4 cards --}}

@endsection