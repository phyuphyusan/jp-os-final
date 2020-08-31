@extends('backendtemplate')
@section('title','Brands')

@section('content')

<div class="container-fluid">
	<h2 class="text-center m-5">Brand Edit Form</h2>
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
	<form method="post" action="{{route('brands.update',$brand->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		<div class="form-group row">
			<label for="inpoutName" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="inpoutName" name="name" value="{{$brand->name}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPhoto" class="col-sm-2 col-form-label">Photo:</label>
			<div class="col-sm-8">
				<input type="file" class="form-control" id="inputPhoto" name="photo">
				<img src="{{asset($brand->photo)}}" class="mt-2" width="100">
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