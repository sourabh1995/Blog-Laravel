<!DOCTYPE html>
<html>
<head>
    <title>First Project</title>
</head>
<body>

    @foreach ($task as $tasks) 
    <li><a href="/tasks/{{$tasks->id}}">{{$tasks->body}}</a></li>
        
  @endforeach
</body>
</html>