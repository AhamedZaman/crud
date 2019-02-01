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
  @foreach($datashow as $row)
  <tbody>
  	
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
      <td><a href="{{URL::to('edit/'.$row->id)}}" class="btn btn-success">edit</a></td>
      <td><a href="{{URL::to('view/'.$row->id)}}" class="btn btn-info">view</a></td>
      <td><a href="{{URL::to('delete/'.$row->id)}}" id="delete" class="btn btn-danger">delete</a></td>
    </tr>
    
  </tbody>
  @endforeach
</table>
</div>
@endsection