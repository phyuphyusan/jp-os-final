@extends('backendtemplate')
@section('title','Categories')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block mb-4">Categories List</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right btn-sm">Add New</a>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      
      <th scope="col">Name</th>
      
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td><!-- table's column name -->
      <td>{{$category->name}}</td>
      
      <td>
      	<a href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-warning "><i class='fas fa-edit'></i> </a>
      	<form method="post" action="{{route('categories.destroy',$category->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
      		@csrf
      		@method('DELETE')
          <button class="btn btn-outline-danger" type="submit"><i class="fas  fa-trash-alt"></i></button>
      	
      	</form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
  $(document).ready(function () {
  
   $("tbody").on("click",".deletebtn",function(e){
    if(!confirm("Do you really want to do this?")) {
       return false;
     }
    e.preventDefault();
    var id = $(this).data("id");
    // var id = $(this).attr('data-id');
    var token = $("meta[name='csrf-token']").attr("content");
    var url = e.target;
    $.ajax(
        {
          url: url.href, //or you can use url: "company/"+id,
          type: 'DELETE',
          data: {
            _token: token,
                id: id
        },
        success: function (response){
            // $("#success").html(response.message)
            Swal.fire(
              'Remind!',
              'Company deleted successfully!',
              'success'
            )
             // location.reload(10000);
        }
     });
      return false;
   });
});
</script>

@endsection

