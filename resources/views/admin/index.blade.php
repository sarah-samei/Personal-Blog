@extends('admin.master')

@section('content')

	<div class="row">

		{{-- drawing form --}}
		<div class="col" style="border: 1px solid yellow">

			<div class="card" style="border: 1px solid blue; height: auto; width: 400px; background: lightblue; margin: 5px auto 0px auto;">
				{!! Form::open(['route' => 'admin.store', 'method' => 'post']) !!}

					<div class="card-header">Select a drawing to post</div>
					<div class="card-body">
						<div class="form-group" style="border: 1px solid yellow; padding: 25px;"> 
							{!! Form::file('img_name', ['class' => 'form-control', 'placeholder' => 'please', 'style' => 'border:2px inset purple']) !!}
							{{ Form::hidden('invisible', 'drawing_form') }}
						</div>
						<div class="form-group" style="border: 1px solid red; padding: 25px;">
						{!! Form::submit('click to submit', ['class'=>'form-control btn btn-success btn-block'])!!}
						</div>
					</div>

				{!! Form::close() !!}

				<ul class="list-group list-group-flush" style="text-align: left;">
					<li class="list-group-item">Total Drawing Posts:</li>
					<li class="list-group-item">Last Update:</li>
				</ul>

			</div>

		</div>




		{{-- resin form --}}
		<div class="col" style="border: 1px solid yellow">

			<div class="card" style="border: 1px solid blue; height: auto; width: 400px; background: lightblue; margin: 5px auto 0px auto;">
				{!! Form::open(['route' => 'admin.store', 'method' => 'post']) !!}

					<div class="card-header">Select a drawing to post</div>
					<div class="card-body">
						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::file('img_name', ['class' => 'form-control', 'placeholder' => 'please', 'style' => 'border:2px inset purple']) !!}

						</div>
						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::text('price', null, ['placeholder'=>'price'])!!}
							{{ Form::hidden('invisible', 'resin_form') }}

						</div>
						<div class="form-group" style="border: 1px solid red; padding: 25px;">
						{!! Form::submit('click to submit', ['class'=>'form-control btn btn-success btn-block'])!!}
						</div>
					</div>

				{!! Form::close() !!}

				<ul class="list-group list-group-flush" style="text-align: left;">
					<li class="list-group-item">Total Drawing Posts:</li>
					<li class="list-group-item">Last Update:</li>
				</ul>

			</div>

		</div>

	</div>

	<div class="row">

		{{-- food form --}}
		<div class="col" style="border: 1px solid yellow">

			<div class="card" style="border: 1px solid blue; height: auto; width: 400px; background: lightblue; margin: 5px auto 0px auto;">
				{!! Form::open(['route' => 'admin.store', 'method' => 'post']) !!}

					<div class="card-header">Select a food to post</div>
					<div class="card-body">

						<div class="form-group" style="border: 1px solid yellow; padding: 25px;"> 

							{!! Form::file('img_name', ['class' => 'form-control', 'placeholder' => 'please', 'style' => 'border:2px inset purple']) !!}

						</div>
						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::text('title', null, ['placeholder'=>'the title'])!!}

						</div>

						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::textarea('recipe', null, ['placeholder'=>'The recipe', 'style'=>'resize:none; width:300px; height:140px'])!!}
							{{ Form::hidden('invisible', 'food_form') }}

						</div>

						<div class="form-group" style="border: 1px solid red; padding: 25px;">
						{!! Form::submit('click to submit', ['class'=>'form-control btn btn-success btn-block'])!!}
						</div>
					</div>

				{!! Form::close() !!}

				<ul class="list-group list-group-flush" style="text-align: left;">
					<li class="list-group-item">Total Drawing Posts:</li>
					<li class="list-group-item">Last Update:</li>
				</ul>

			</div>

		</div>



		{{-- cake form --}}
		<div class="col" style="border: 1px solid yellow">

			<div class="card" style="border: 1px solid blue; height: auto; width: 400px; background: lightblue; margin: 5px auto 0px auto;">
				{!! Form::open(['route' => 'admin.store', 'method' => 'post']) !!}

					<div class="card-header">Select a cake to post</div>
					<div class="card-body">
						<div class="form-group" style="border: 1px solid yellow; padding: 25px;"> 
							{!! Form::file('img_name', ['class' => 'form-control', 'placeholder' => 'please', 'style' => 'border:2px inset purple']) !!}<br>
						</div>

						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::text('title', null, ['placeholder'=>'the title'])!!}

						</div>

						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::textarea('recipe', null, ['placeholder'=>'The recipe', 'style'=>'resize:none; width:300px; height:140px'])!!}
							{{ Form::hidden('invisible', 'cake_form') }}

						</div>


						<div class="form-group" style="border: 1px solid red; padding: 25px;">
						{!! Form::submit('click to submit', ['class'=>'form-control btn btn-success btn-block'])!!}
						</div>
					</div>

				{!! Form::close() !!}

				<ul class="list-group list-group-flush" style="text-align: left;">
					<li class="list-group-item">Total Drawing Posts:</li>
					<li class="list-group-item">Last Update:</li>
				</ul>

			</div>

		</div>

	</div>
	<div class="row">

		{{-- writing form --}}
		<div class="col" style="border: 1px solid yellow">

			<div class="card" style="border: 1px solid blue; height: auto; width: 400px; background: lightblue; margin: 5px auto 0px auto;">
				{!! Form::open(['route' => 'admin.store', 'method' => 'post']) !!}

					<div class="card-header">Select a cake to post</div>
					<div class="card-body">
						<div class="form-group" style="border: 1px solid yellow; padding: 25px;"> 
							{!! Form::file('img_name', ['class' => 'form-control', 'placeholder' => 'please', 'style' => 'border:2px inset purple']) !!}<br>
						</div>

						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::text('title', null, ['placeholder'=>'the title'])!!}

						</div>

						<div class="form-group" style="border: 1px solid yellow; padding: 25px;">

							{!! Form::textarea('recipe', null, ['placeholder'=>'My writing', 'style'=>'resize:none; width:300px; height:140px'])!!}
							{{ Form::hidden('invisible', 'writing_form') }}

						</div>


						<div class="form-group" style="border: 1px solid red; padding: 25px;">
						{!! Form::submit('click to submit', ['class'=>'form-control btn btn-success btn-block'])!!}
						</div>
					</div>

				{!! Form::close() !!}

				<ul class="list-group list-group-flush" style="text-align: left;">
					<li class="list-group-item">Total Drawing Posts:</li>
					<li class="list-group-item">Last Update:</li>
				</ul>

			</div>

		</div>


	</div> {{-- end of row --}}

@endsection