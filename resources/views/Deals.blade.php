@extends('layout')
@section('content')

<div class="container" style="margin-top:5%;margin-bottom:5%">
<div class="row"> 
@foreach($Deals as $deal)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
          <h3>{{$deal->nom}}</h3>
          <h6>
          {{$deal->description}}
          </h6>
          <p>
          <i style="text-decoration: line-through;">{{$deal->valeur}} DT</i>
          <i style="color:#514095;font-weight:bold;float:right">{{$deal->valeur}} DT</i>
          </p>
         
      </div>
      <button type="button" class="btn btn-primary btn-sm btn-block">Acheter</button>
  </div>
</div>
@endforeach

</div>
</div>
@endsection
