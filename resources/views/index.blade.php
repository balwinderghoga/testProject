<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 8 CRUD Example Tutorial</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ url('create') }}"> Create Custom</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th> Address</th>
<th width="280px">Action</th>
</tr>
@foreach ($data as $data)
<tr>
<td>{{ $data->id }}</td>
<td>{{ $data->name }}</td>
<td>{{ $data->email }}</td>
<td>{{ $data->address }}</td>
<td>
<form action="{{ url('delete',$data->id) }}" method="Post">
<a class="btn btn-primary" href="{{ url('edit',$data->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger show_confirm"  onclick="myFunction()">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>

</body>
</html>