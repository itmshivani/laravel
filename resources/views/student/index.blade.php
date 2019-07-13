@extends("student.index")

@section("title","Student Application | Listing")

@section("body")

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Sr no</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Contact</th>
					<th>College</th>
					<th>Action</th>
				     
				</tr>
			</thead>
			<tbody>
				<?php $i=1;?>
				@foreach($students as $Student)
				<tr>
					<td>{{ $i++}}</td>
					<td>{{ $student->Username}}</td>
					<td>{{ $student->Password}}</td>
					<td>{{ $student->Email}}</td>
					<td>{{ $student->Contact}}</td>
					<td>{{ $student->College}}</td>
				</tr>
				@endforeach
			</tbody>
			
		</table>
		

    </div>
</body>