@extends('layouts.master')

@section('content')
	<div class="card col-lg-6 offset-lg-3 mt-4 p-0">
		<div class="card-body">
			<p class="text-center">Welcome to the home page.</p>

			<ul>
				<li>Name: {{ auth()->user()->name }}</li>
				<li>Email: {{ auth()->user()->email }}</li>
			</ul>
		</div>
	</div>
@endsection