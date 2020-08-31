@extends('backendtemplate')
@section('title','Brands')
@section('content')
<div class="container-fluid mt-4">
	<h2 class="text-center mb-4">Add New Brand Form</h2>
	
	<form method="post" action="{{route('brands.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="name">
				@error('name')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPhoto" class="col-sm-2 col-form-label">Photo:</label>
			<div class="col-sm-10">
				<input type="file" class="form-control" id="inputPhoto" name="photo">
				@error('photo')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-group row mt-4">
			<div class="offset-2 col-sm-10">
				<input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Save">
			</div>
		</div>
	</form>
</div>
@endsection