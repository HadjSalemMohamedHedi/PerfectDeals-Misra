@extends('layoutAdmin')
@section('content')

<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>email</th>
    
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
@foreach($Users as $user)

<tr>
      <th scope="row">{{$user->id}}</th>
      <td><a href="/ShowCar/{{$user->id}}">{{$user->name}}</a></td>
      <td>{{$user->email}}</td>
      <td><a href="edituser/{{$user->id}}" class="btn btn-outline-info">Update</a></td>
      <td><a href="DestroyUser/{{$user->id}}" class="btn btn-outline-danger">Delete</a></td>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection