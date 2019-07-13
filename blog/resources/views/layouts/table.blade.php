@extends("admin.master")

@section("title","Table page")

@section("body")
<div class="container a">
<div class="card">
  <div class="card-header">Student List
  	<a href="{{url('crud/create')}}" class="btn btn-success float-right">+Add Student</a>

  </div>
  <div class="card-body"> <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>File</th>
        <th>Download</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    	<?php $i=1; ?>
    	@foreach($cruds as $crud)   
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $crud->name }}</td>
        <td>{{$crud->address}}</td>
        <td>{{$crud->email}}</td>
        <td>{{$crud->phone}}</td>
        
          <!-- <td>{{url('upload/'.$crud->image)}}</td> -->
        <td>
          @php
          if(!empty($crud->image)){ @endphp
           <img src="{{url('upload/'.$crud->image)}}" style="height: 50px; width: 50px;">
           @php
        }else{
        @endphp
        <h6>No Image Found</h6>
        @php } @endphp
        </td>

        <td>
          <a href="upload/{{$crud->image}}" download="{{$crud->image}}">
            <button type="button" class="btn btn-primary">Download</button>
          </a>
        </td>
        
        <td>
        	<a href="{{url('crud/'.$crud->id.'/edit')}}" class="btn btn-info">Edit</a>
        	<form action="/crud/{{$crud->id}}" method="post" class="pull-right">

        		{{csrf_field()}}
        		{{method_field('DELETE')}}

        		<button type="submit" class="btn btn-danger">Delete</button>
        	</form>
        </td>
      </tr>      
      @endforeach
    </tbody>
  </table></div> 
  <div class="card-footer">Footer</div>
</div>
</div>


@endsection