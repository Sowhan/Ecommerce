<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
<h1> Chapainawabgonj </h1>
<h2>{{$name}}</h2>
<h2>{{$roll}}</h2>
@foreach($names as $name)
    <h2> {{$name}}</h2>
@endforeach
@foreach($students as $student)
    <h2>{{$student['name']}}-{{$student['age']}}-{{$student['job']}}</h2>
@endforeach

</body>
</html>