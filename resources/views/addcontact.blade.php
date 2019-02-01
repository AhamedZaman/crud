@extends('layouts.app')
@section('content')
<div class="container" >
	<form action="{{URL::to('/insert-contact')}}" method="POST">
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone number" name="phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection