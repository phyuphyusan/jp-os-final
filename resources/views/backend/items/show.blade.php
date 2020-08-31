@extends('backendtemplate')
@section('title','Items')
@section('content')
	<div class="container-fluid">
		<h2 class="m-4 text-center">Items Detail</h2>
		<div class="row m-5">
			<div class="col-md-4">
				<img src="{{asset($item->photo)}}" class="img-fluid" >
			</div>
			<div class="offset-1 col-md-6">
				<table class="table">
  					<tbody>
      					<tr>
      						<td>Item Name:</td>
      						<td>{{$item->name}}</td>
      					</tr>
      					<tr>
      						<td>Item Code:</td>
      						<td>{{$item->codeno}}</td>
      					</tr>
      					<tr>
      						<td>Item Price:</td>
      						<td>{{$item->price}}</td>
      					</tr>
      					<tr>
      						<td>Description:</td>
      						<td>{{$item->description}}</td>
      					</tr>
 					 </tbody>
				</table>
			</div>	
		</div>
	</div>
@endsection