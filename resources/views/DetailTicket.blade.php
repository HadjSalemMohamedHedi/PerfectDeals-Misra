@extends('layout')
@section('content')

<div class="container" style="margin-top:5%;margin-bottom:5%">

<div class="jumbotron" style="background:#f9fcff">
  <h1 class="display-3">{{$ticket->nom}}</h1>
  <p class="lead">
  {{$ticket->description}} .
  <hr class="my-2">
  <p class="lead">
  <h4><i class="fas fa-phone-volume"></i> Phone : {{$ticket->phone}} </h4> 
  <h4> <i class="fas fa-map-marked-alt"></i> Adresse  : {{$ticket->adresse}} </h4> 
 
  </p>
  <hr class="my-2">
  <hr class="my-2">
  <p> 
  <span class="badge badge-danger"style="padding:2%;font-size:15px"> {{$ticket->valeur}} DT   : سومو  </span>  
  <span class="badge badge-info"style="padding:2%;font-size:15px"> {{$ticket->prix}} DT   : إشريه ب </span>  
  <span class="badge badge-success"style="padding:2%;font-size:15px"> {{$ticket->valeur - $ticket->prix}} DT   : فضل </span>  
 
      
     
</p>
  <p class="lead">
    <a class="btn btn-outline-primary btn-lg btn-block" href="#!" role="button">acheter</a>
  </p>
</div>
</div>
</div>
@endsection
