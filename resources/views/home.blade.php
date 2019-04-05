<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <h1> Home page </h1>
  <h1>{{ $name }}</h1>
  <h1>{{ $roll }}</h1>


  @foreach($cars as $car)
      <h2>{{ $car }}</h2>
      @endforeach
@foreach($students as $student)
    <h2>{{ $student['name'] }}-{{ $student['age'] }}-{{ $student['job'] }}</h2>
    @endforeach

</body>
</html>