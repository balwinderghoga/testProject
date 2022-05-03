<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Form - Laravel 8 CRUD Tutorial</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Custom</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ url('index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ url('update',$data->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('POST')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Custom Name:</strong>
<input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="Custom name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Custom Email:</strong>
<input type="email" name="email" class="form-control" placeholder="Custom Email" value="{{ $data->email }}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Custom Address:</strong>
<input type="text" name="address" value="{{ $data->address }}" class="form-control" placeholder="Company Address">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>