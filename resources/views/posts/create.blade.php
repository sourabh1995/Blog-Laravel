@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

<h4>This is the form</h4>
<hr><hr>
<form method="POST" action="/posts">
{{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body" placeholder="Content goes here"></textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>
  @include('layouts.errors')
</form>

</div>

@endsection