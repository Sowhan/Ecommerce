<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



</head>
<body>
<div class="row">
    <div class="col-md-8">
     <table class="table table-stripped">
         <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Number</th>
             <th>Email</th>
             <th>Address</th>
             <th>Added at</th>
             <th>Updated at</th>
             <th>Action</th>
         </tr>
         @foreach($contact as $con)
         <tr>
             <td>{{ $con->id }}</td>
             <td>{{ $con->name }}</td>
             <td>{{ $con->number }}</td>
             <td>{{ $con->email }}</td>
             <td>{{ $con->address }}</td>
             <td>{{ \Carbon\Carbon::parse($con->created_at)->diffForHumans() }}</td>
             <td>{{ \Carbon\Carbon::parse($con->updated_at)->diffForHumans() }}</td>
             <td><a href="{{ url('contact/edit', $con->id) }}"><i class="text-success fa fa-edit"></i></a> | <a href="{{ url('contact/delete', $con->id) }}" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
         </tr>
             @endforeach
     </table>
    </div>
</div>
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