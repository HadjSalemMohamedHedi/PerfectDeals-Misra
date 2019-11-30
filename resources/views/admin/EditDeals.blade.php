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
<form  class="form-horizontal" method="post" action="update/{{$deal->id}}">
  @csrf
  <div class="form-group">
  @method('put')
    <input type="text" id="nom" name="nom" class="form-control" value="{{$deal->nom}}">
  </div>

    <div class="form-group">
    <label for="color">description </label>
    <input type="text" id="description"  name="description"class="form-control" value="{{$deal->description}}">
  </div>

      <div class="form-group">
    <label for="company">prix </label>
    <input type="text" id="prix" name="prix"class="form-control" value="{{$deal->prix}}">
  </div>

  <div class="form-group">
    <label for="company">valeur </label>
    <input type="text" id="valeur" name="valeur"class="form-control" value="{{$deal->valeur}}">
  </div>

  <div class="form-group">
    <label for="company">adresse </label>
    <input type="text" id="adresse" name="adresse"class="form-control" value="{{$deal->adresse}}">
  </div>

  <div class="form-group">
    <label for="company">phone </label>
    <input type="text" id="phone" name="phone"class="form-control" value="{{$deal->phone}}">
  </div>
  
  <button type="submit">Submit</button>
</form>


@endsection