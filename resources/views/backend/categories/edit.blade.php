@extends('backendtemplate')
@section('title','Categories')

@section('content')

<div class="container-fluid m-4">
	<h2 class="text-center m-4 ">Category Edit Form</h2>
	{{-- Must show related input errors --}}
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		<div class="form-group row">
			<label for="inpoutName" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="inpoutName" name="name" value="{{$category->name}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPhoto" class="col-sm-2 col-form-label">Photo:</label>
			<div class="col-sm-8">
				<input type="file" class="form-control" id="inputPhoto" name="photo">
				<img src="{{asset($category->photo)}}" class="mt-2" width="100">
			</div>
		</div>
	
		<div class="form-group row mt-4">
			<div class="offset-2 col-sm-8">
				<input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Update">
			</div>
		</div>
		</form>
	
</div>

@endsection