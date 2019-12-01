@extends('layout')
@section('content')

<div class="container" style="margin-top:5%;margin-bottom:5%">
<div class="row"> 
@foreach($Tickets as $ticket)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
          <h3>{{$ticket->nom}}</h3>
          <h6>
          {{$ticket->description}}
          </h6>
          <p>
          <i style="text-decoration: line-through;">{{$ticket->valeur}} DT</i>
          <i style="color:#514095;font-weight:bold;float:right">{{$ticket->prix}} DT</i>
          </p>
         
      </div>
      <button type="button" class="btn btn-primary btn-sm btn-block">Acheter</button>
  </div>
</div>
@endforeach

</div>
</div>
@endsection
