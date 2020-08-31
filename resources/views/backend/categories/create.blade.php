@extends('backendtemplate')
@section('title','Category')
@section('content')
<div class="container-fluid m-4">
	<h2 class="text-center m-4">Create Category Form</h2>
	
	<form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="inputName" name="name">
				@error('name')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPhoto" class="col-sm-2 col-form-label">Photo:</label>
			<div class="col-sm-8">
				<input type="file" class="form-control" id="inputPhoto" name="photo">
				@error('photo')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-group row mt-4">
			<div class="offset-2 col-sm-8">
				<input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Save">
			</div>
		</div>
	</form>
</div>
@endsection