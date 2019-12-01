@extends('layout')
@section('content')

<div class="container" style="margin-top:5%;margin-bottom:5%">

<div class="jumbotron" style="background:#f9fcff">
  <h1 class="display-3">{{$deal->nom}}</h1>
  <p class="lead">
  {{$deal->description}} .
  </p>
  <hr class="my-2">
  <p class="lead">
  <h4><i class="fas fa-phone-volume"></i> Phone : {{$deal->phone}} </h4> 
  <h4> <i class="fas fa-map-marked-alt"></i> Adresse  : {{$deal->adresse}} </h4> 
 
  </p>
  <hr class="my-2">


  <p> 
  <span class="badge badge-danger"style="padding:2%;font-size:15px"> {{$deal->valeur}} DT   : سومو  </span>  
  <span class="badge badge-info"style="padding:2%;font-size:15px"> {{$deal->prix}} DT   : إشريه ب </span>  
  <span class="badge badge-success"style="padding:2%;font-size:15px"> {{$deal->valeur - $deal->prix}} DT   : فضل </span>  
 
      
     
</p>
  <p class="lead">
    <a class="btn btn-outline-primary btn-lg btn-block" href="#!" role="button">acheter</a>
  </p>
</div>
</div>
</div>
@endsection
