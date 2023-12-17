@extends('layouts.master')
@section('content')
		<div class="row" style="padding-top: 40px;">

		{{-- food card --}}
		<div class="col h-100 d-flex align-items-center justify-content-center" style="margin-top: 15px;">
			<div class="card" style="width: 18rem; border: 1px solid #00ffff">
				<img class="card-img-top" src="{{asset('dist/img/resin.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">MY HAND'S ART</h5>
					<p class="card-text">The artworks I have created using resin and other materials.</p>
					<a href="{{url('/food')}}" class="btn" style="background-color: #32325d; color: white;">FOOD</a>
				</div>
			</div>
		</div>

		{{-- cake card --}}
		<div class="col h-100 d-flex align-items-center justify-content-center" style="margin-top: 15px;">
			<div class="card" style="width: 18rem; border: 1px solid #00ffff">
				<img class="card-img-top" src="{{asset('dist/img/resin.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">MY OTHER HAND's ART</h5>
					<p class="card-text">If you likes drawing, let's have a look at mine!</p>
					<a href="{{url('/cake')}}" class="btn" style="background-color: #32325d; color: white;">CAKE</a>
				</div>
			</div>
		</div>
</div>
@endsection