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
<form  class="form-horizontal" method="post" action="update/{{$user->id}}">
  @csrf
  <div class="form-group">
  @method('put')
    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
  </div>

    <div class="form-group">
    <label for="email">E-mail </label>
    <input type="text" id="email"  name="email" class="form-control" value="{{$user->email}}">
  </div>


  
  <button type="submit">Submit</button>
</form>


@endsection