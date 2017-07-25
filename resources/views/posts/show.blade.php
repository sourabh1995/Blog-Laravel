@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

<h1>{{$post->title}}</h1>

<h4>{{$post->body}}</h4>

<div class="comment">
	<ul class="list-group"> 
	@foreach($post->comments as $comment)

	<li class="list-group-item">
	<strong>{{$comment->created_at->diffforHumans()}}</strong>
	&nbsp;
		{{$comment->body}}
	</li>
	@endforeach
	</ul>
</div>
@if(Auth::check())
<div class="card">
	<div class="card-block">
	<form method="POST" action="/posts/{{ $post->id }}/comments">
		{{csrf_field()}}

			<div class="form-group">
				<textarea name="body" placeholder="Your comment here.." class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Comment</button>
			</div>			
		</form>	
		@include('layouts.errors')	
	</div>	
</div>
@endif
</div>
@endsection
