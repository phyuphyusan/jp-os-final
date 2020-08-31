@extends('backendtemplate')
@section('title','Items')
@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Items Lists</h2>
		<a href="{{route('items.create')}}" class="btn btn-outline-info btn-sm float-right">Add New</a>
		<table class="table table-bordered mt-3">
			<thead>
				<tr>
					<th>No</th>
					<th>Codeno</th>
					<th>Name</th>
					<th>Price</th>
					<th colspan="2">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->codeno}}<a href="{{route('items.show',$item->id)}}" ><span class="badge badge-success ml-3"><i class="fas fa-eye"></i></span> </a>

					<a href="#" class="detailBtn" data-photo="{{asset($item->photo)}}" data-name="{{$item->name}}" data-codeno="{{$item->codeno}}" data-price="{{$item->price}}" data-description="{{$item->description}}"><span class="badge badge-success ml-3"><i class="fas fa-eye"></i></span> </a>

					<td>{{$item->name}}</td>
					<td>{{$item->price}}</td>
					<td>
						<a href="{{route('items.edit',$item->id)}}" class="btn btn-outline-warning"><i class='fas fa-edit'></i></a>
						<form method="post" action="{{route('items.destroy',$item->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
							@csrf
							@method("DELETE")
							<button class="btn btn-outline-danger" type="submit"><i class="fas  fa-trash-alt"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	<!-- Detail Modal -->
	<div class="modal" id="detailModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title name"></h4>
					
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<img src="" class="img-fluid itemImg w-50 d-block">
						</div>
						<div class="col-md-6 content"></div>
						
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-outline-info btn-sm" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.detailBtn').click(function(){
				var name=$(this).data('name');
				var photo=$(this).data('photo');
				var codeno=$(this).data('codeno');
				var price=$(this).data('price');
				var description=$(this).data('description');
				$('.itemImg').attr('src',photo);
				$('.name').text(name);
				$('.content').html(`<p>${codeno}</p>
									<p>${price}</p>
									<p>${description}</p>
									`);
				$('#detailModal').modal('show');
			})
		})
	</script>
@endsection