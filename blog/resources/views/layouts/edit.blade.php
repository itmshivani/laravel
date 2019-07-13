@extends("layouts.create")

@section("Id",$crud->id)

@section("Name",$crud->name)

@section("Address",$crud->address)

@section("Email",$crud->email)

@section("Phone",$crud->phone)

@section("editMethod")

	{{method_field('PUT')}}

	@endsection