 @extends('admin.master')

 @section("title", 'Form page')

 @section('body')

<div class="container a">
	
<div class="card">
  <div class="card-header">Add Student
  	<a href="{{url('crud')}}" class="btn btn-info float-right">Show Data</a>
  </div>
  <div class="card-body">

  	<form method="post" action="/crud/@yield('Id')" enctype="multipart/form-data">
  		{{csrf_field()}}
      <!-- {{ method_field("put") }} -->


      @section('editMethod')
      @show
  		<div class="form-group">
  			<label for="name">Name:</label>
  			<input type="text" value="@yield('Name')" name="name" class="form-control">
  		</div>

  		<div class="form-group">
  			<label for="name">Address:</label>
  			<input type="text" value="@yield('Address')" name="address" class="form-control">
  		</div>

  		<div class="form-group">
  			<label for="name">Email:</label>
  			<input type="text" value="@yield('Email')" name="email" class="form-control">
  		</div>

  		<div class="form-group">
  			<label for="name">Phone:</label>
  			<input type="text" value="@yield('Phone')" name="phone" class="form-control">
  		</div>

      <div class="form-group">
        <label for="name">Image:</label>
        <input type="file" value="@yield('image')" name="image" class="form-control">
      </div>
      <div class="card-footer">
    <button type="submit" class="btn btn-success">Submit</button>

  </div>
  	</form>
</div>
</div>
</div>


 @endsection