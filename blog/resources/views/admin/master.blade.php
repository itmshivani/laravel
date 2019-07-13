<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		.a{
			margin-top: 30px;
		}
	</style>
</head>
<body>

<div class="container a">
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	@if(session()->has("Message"))
	<div class="alert alert-success">
		<p>  {{session()->get("Message")}} </p>
	</div>
	@endif

	@section('body')
	@show
</div>

</body>
</html>