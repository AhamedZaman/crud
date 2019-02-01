@extends('layouts.app')
@section('content')
<div class="container" >
	<form action="{{URL::to('update-contact/'.$edit->id)}}" method="POST">
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->name}}" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->email}}" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->phone}}" name="phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection