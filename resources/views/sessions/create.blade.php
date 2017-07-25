@extends('layouts.master')


@section('content')
	<div class="col-md-8">
	<h4>Sign In</h4>

	<form method="POST" action="/login">
		{{ csrf_field() }}

		
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>
		
		<div class="form-group">
			<input type="submit" name="submit" value="Login" class="btn btn-primary">
		</div>
		@include ('layouts.errors')
	</form>
		

	</div>

@endsection