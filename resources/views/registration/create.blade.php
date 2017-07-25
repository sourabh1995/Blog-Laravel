@extends('layouts.master')


@section('content')
	<div class="col-md-8">
	<h4>Registration</h4>

	<form method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="password_confirmation">Password Confirmation:</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Register" class="btn btn-primary">
		</div>
		@include ('layouts.errors')
	</form>
		

	</div>

@endsection