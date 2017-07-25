<!DOCTYPE html>
<html>
<head>
    <title>First Project</title>
</head>
<body>

    @foreach ($task as $tasks) 
    <li>{{$tasks->body}}</li>
        
  @endforeach
</body>
</html>