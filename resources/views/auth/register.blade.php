@extends('layouts.master')

@section('content')
	<div class="card col-lg-6 offset-lg-3 mt-4 p-0">
		<h4 class="card-header text-center">Create new account</h4>
		<div class="card-body">
			<form method="POST" action="{{ route('register.submit') }}">
				@csrf

				<div class="form-group">
					<label for="name">Name</label>
					<input type="name" name="name" class="form-control" id="name" value="{{ old('name') }}">
					@error('name')
					    <small class="form-text text-danger">{{ $message }}</small>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="email">Email Address</label>
					<input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
					@error('email')
					    <small class="form-text text-danger">{{ $message }}</small>
					@enderror
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password">
					@error('password')
					    <small class="form-text text-danger">{{ $message }}</small>
					@enderror
				</div>

				<div class="form-group">
					<label for="password_confirmation">Confirm Password</label>
					<input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
				</div>

				<div class="form-group">
					<button class="btn btn-primary btn-block">Register</button>
				</div>				
			</form>

			<p class="text-center font-weight-bold">or signup with</p>

			<div class="text-center">
				<button class="btn btn-light w-25 mr-3"><i class="fa fa-google"></i> Google</button>
				<button class="btn btn-light w-25 mr-3"><i class="fa fa-facebook-official"></i> Facebook</button>
				<button class="btn btn-light w-25"><i class="fa fa-twitter"></i> Twitter</button>
			</div>
		</div>
	</div>
@endsection