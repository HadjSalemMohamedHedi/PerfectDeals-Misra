@extends('layoutAdmin')
@section('content')

<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>email</th>
      <th>subject</th>
      <th>envoyé le </th>
      <th></th>
    
    </tr>
  </thead>
  <tbody>
@foreach($Messages as $message)

<tr>
      <th scope="row">{{$message->id}}</th>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->subject}}</td>
      <td><a href="ShowMessage/{{$message->id}}" class="btn btn-outline-info">Repondre</a></td>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection