@extends('layoutAdmin')
@section('content')

<div class="container">
<a href="/CreateTickets" class="btn btn-outline-success">Add Tickets</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Prix</th>
      <th>valeur</th>
      <th>adresse</th>
      <th>phone</th>
      <th>Date</th>
      <th>Horaire</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
@foreach($Tickes as $ticket)

<tr>
      <th scope="row">{{$ticket->id}}</th>
      <td><a href="/ShowCar/{{$ticket->id}}">{{$ticket->nom}}</a></td>
      <td>{{$ticket->prix}} DT</td>
      <td>{{$ticket->valeur}} DT</td>
      <td>{{$ticket->adresse}}</td>
      <td>{{$ticket->phone}}</td>
      <td>{{$ticket->date}}</td>
      <td>{{$ticket->Horaire}}</td>
      <td><a href="EditTicket/{{$ticket->id}}" class="btn btn-outline-info">Update</a></td>
      <td><a href="DestroyTicket/{{$ticket->id}}" class="btn btn-outline-danger">Delete</a></td>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection