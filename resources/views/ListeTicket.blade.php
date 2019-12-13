@extends('layout')
@section('content')

<div class="container" style="margin-top:5%;margin-bottom:5%">
<div class="row"> 
@foreach($Tickets as $ticket)
  <div class="col-sm-4">
  <a href="ShowTicket/{{$ticket->id}}" >
    <div class="card tickets-card">
      <div class="card-body">
      <h3 style="color:#e03443;font-weight:bold">{{$ticket->nom}}</h3>
      <h6  style="color:#6d6868;font-weight:300">{{$ticket->description}}</h6>
          <p>
          <i style="text-decoration: line-through;">{{$ticket->valeur}} DT</i>
          <i style="color:#514095;font-weight:bold;float:right">{{$ticket->prix}} DT</i>
          </p>
         
      </div>
      <button type="button" class="btn btn-outline-primary btn-sm btn-block">Acheter</button>
  </div>
</a>
</div>
@endforeach

</div>
</div>
@endsection
<style>
.tickets-card:hover{
border:1px solid #e03443;
box-shadow: 30px 30px 80px rgba(55, 84, 170, 0.1), -30px -30px 80px white, inset 4px 4px 20px rgba(255, 255, 255, 0.44)
}
</style>