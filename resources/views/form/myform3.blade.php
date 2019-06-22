@if($errors->any())
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
  @endif
<form method="post" action="/submitmyform2">
{{csrf_field()}}
	<p>
		<label>name</label>
		<input type="text" name="name" value="{{old('name')}}">
	</p>

	<p>
		<label>quantity</label>
		<input type="text" name="quantity" value="{{old('quantity')}}">
	</p>

	<p>
		<label>description</label>
		<input type="text" name="description" value="{{old('description')}}">
	</p>

	<p>
		<input type="submit" name="submit">
	</p>


	
</form>