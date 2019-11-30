@extends('layoutAdmin')
@section('content')

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  class="form-horizontal" method="post" action="update/{{$ticket->id}}">
  @csrf
  <div class="form-group">
  @method('put')
    <input type="text" id="nom" name="nom" class="form-control" value="{{$ticket->nom}}">
  </div>

    <div class="form-group">
    <label for="color">description </label>
    <input type="text" id="description"  name="description"class="form-control" value="{{$ticket->description}}">
  </div>

      <div class="form-group">
    <label for="company">prix </label>
    <input type="text" id="prix" name="prix"class="form-control" value="{{$ticket->prix}}">
  </div>

  <div class="form-group">
    <label for="company">valeur </label>
    <input type="text" id="valeur" name="valeur"class="form-control" value="{{$ticket->valeur}}">
  </div>

  <div class="form-group">
    <label for="company">adresse </label>
    <input type="text" id="adresse" name="adresse"class="form-control" value="{{$ticket->adresse}}">
  </div>

  <div class="form-group">
    <label for="company">phone </label>
    <input type="text" id="phone" name="phone"class="form-control" value="{{$ticket->phone}}">
  </div>
  

  <div class="form-group">
    <label for="company">date </label>
    <input type="date" id="date" name="date"class="form-control" value="{{$ticket->date}}">
  </div>



  <div class="form-group">
    <label for="company">Horaire </label>
    <input type="time" id="Horaire" name="Horaire"class="form-control" value="{{$ticket->Horaire}}">
  </div>



  <button type="submit">Submit</button>
</form>


@endsection