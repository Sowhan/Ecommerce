<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
{!! Form::open(['url' => 'contact/store']) !!}
 {{Form::text('name','',['class'=>'form-control','placeholder'=>'Inter your name'])}}
 {{Form::text('number','',['class'=>'form-control','placeholder'=>'Inter your mobil_number'])}}
 {{Form::text('email','',['class'=>'form-control','placeholder'=>'Inter your email'])}}
 {{Form::text('address','',['class'=>'form-control','placeholder'=>'Inter your address'])}}

 {{Form::submit('save',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@if(Session::has('success'))
<script>
    Swal.fire(
        'Good job!',
        '{{ Session::get("success") }}',
        'success'
    )
</script>
    @endif
@if(Session::has('error'))
    <script>
        Swal.fire(
            'Good job!',
            '{{ Session::get("error") }}',
            'error'
        )
    </script>
@endif
</body>
</html>