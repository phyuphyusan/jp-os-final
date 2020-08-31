@extends('backendtemplate')
@section('title','Subcategories')

@section('content')

<div class="container-fluid">
	<h2 class="text-center m-5">Subcategory Edit Form</h2>
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
	<form method="post" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		<div class="form-group row">
			<label for="inpoutName" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="inpoutName" name="name" value="{{$subcategory->name}}">
			</div>
		</div>
		
		<div class="form-group row">
				<label for="inputCategory" class="col-sm-2 col-form-label">Category:</label>
				<div class="col-sm-8">
					<select name="category" class="form-control">
						<optgroup label="Choose Category">
							@foreach($categories as $category)
							<option value="{{$category->id}}" @if($category->id==$subcategory->category_id){{'selected'}}@endif>{{$category->id}}</option>
							@endforeach
						</optgroup>


					</select>
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