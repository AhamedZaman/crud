

@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>

  <tbody>
  	
    <tr>
      <th scope="row">{{$view->id}}</th>
      <td>{{$view->name}}</td>
      <td>{{$view->email}}</td>
      <td>{{$view->phone}}</td>
      <td><a href="{{URL::to('edit/'.$view->id)}}" class="btn btn-success">edit</a></td>

      <td><a href="{{URL::to('delete/'.$view->id)}}" class="btn btn-danger">delete</a></td>
    </tr>
    
  </tbody>

</table>
</div>
@endsection