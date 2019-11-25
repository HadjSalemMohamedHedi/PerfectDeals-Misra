@extends('layoutAdmin')
@section('content')

<div class="container">
<a href="/CreateDeal" class="btn btn-outline-success">Add Deals</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Prix</th>
      <th>valeur</th>
      <th>adresse</th>
      <th>phone</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
@foreach($Deals as $deal)

<tr>
      <th scope="row">{{$deal->id}}</th>
      <td><a href="/ShowCar/{{$deal->id}}">{{$deal->nom}}</a></td>
      <td>{{$deal->prix}} DT</td>
      <td>{{$deal->valeur}} DT</td>
      <td>{{$deal->adresse}}</td>
      <td>{{$deal->phone}}</td>
      <td><a href="editdeal/{{$deal->id}}" class="btn btn-outline-info">Update</a></td>
      <td><a href="destroy/{{$deal->id}}" class="btn btn-outline-danger">Delete</a></td>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection
