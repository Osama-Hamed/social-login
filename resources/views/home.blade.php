@extends('layouts.master')

@section('content')
	<div class="card col-lg-6 offset-lg-3 mt-4 p-0">
		<div class="card-body">
			Welcome to the home page, {{ auth()->user()->name }}.
		</div>
	</div>
@endsection