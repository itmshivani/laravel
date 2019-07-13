@if($errors->any())
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
  @endif

<!DOCTYPE html>

<html>
<head>
	<title>cards</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark " style="height: 70px; background-color:rgba(56, 37, 216, 0.98); "></nav></br></br>

	<div class="container">
		<div class="row">
			<div class="card mx-auto" style="width: 600px; top: 3px;" style="">
			
				<br><br>
				<form method="POST" action="/tenfeild">
					{{csrf_field()}}
					<center>
                <div class="form-group">
				
				<input  type="text" name="Username" id="last name" class="form-control" placeholder="Username" style="width: 384px;">
				 </div> </br>
				 <div class="form-group">
				
				<input  type="text" name="Password" id="last name" class="form-control" placeholder="Password" style="width: 384px;">
				 </div><br>
				 <div class="form-group">
				
				<input  type="text" name="Email" id="last name" class="form-control" placeholder="Email" style="width: 384px;">
				 </div><br>
				 <div class="form-group">
				
				<input  type="text" name="Contact" id="last name" class="form-control" placeholder="Contact" style="width: 384px;">
				 </div><br>

				 <div class="form-group">
				
				<input  type="text" name="College" id="last name" class="form-control" placeholder="College" style="width: 384px;">
				 </div><br>

				 <div class="form-group">
				
				<input  type="text" name="Degree" id="last name" class="form-control" placeholder="Degree" style="width: 384px;">
				 </div><br>

				 <div class="form-group">
				
				<input  type="text" name="Address" id="last name" class="form-control" placeholder="Address" style="width: 384px;">
				 </div><br>

				 <div class="form-group">
				
				<input  type="text" name="School" id="last name" class="form-control" placeholder="School" style="width: 384px;">
				 </div><br>

				 <div class="form-group">
				
				<input  type="text" name="Hobby" id="last name" class="form-control" placeholder="Hobby" style="width: 384px;">
				 </div><br>

				 <div class="form-group">
				
				<input  type="text" name="City" id="last name" class="form-control" placeholder="City" style="width: 384px;">
				 </div><br>
				
				
				
				
				
				
				 <input type="submit" name="" id="" class="btn btn-primary" style="width: 87px;">
				 <span><a href="#">Register</a>
				 </span>
				 </center> <br>
				
				</form>
					
						<div class="card-footer">
							<a href="#" data-toggle="modal" data-target="#mod">NEW REGISTRATION ?</a>
						</div>
						
			
		</div>
		
	</div>
	
	

</body>
</html>