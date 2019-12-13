@extends('layout')
@section('content')
<div class="container-fluid ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25411.03656251396!2d9.840102019917264!3d37.23870082720877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e31f9139569197%3A0x9678753d564ef6e6!2sMenzel%20Abderrahmen!5e0!3m2!1sfr!2stn!4v1574092168872!5m2!1sfr!2stn" width="100%"  frameborder="0" class="carte" allowfullscreen=""></iframe>
    <div class="container contactus">

    <div class="wrap">
  <div class="container">
    <form class="cool-b4-form" method="post" action="EnvoyerMessage">
    <h2 class="text-center pt-4">Contact Us</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
  @csrf
            <input type="text" class="form-control" name="name" id="name">
            <label for="name">Name</label>
            <span class="input-highlight"></span>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email">
            <label for="email">Email</label>
            <span class="input-highlight"></span>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject">
            <label for="subject">Subject</label>
            <span class="input-highlight"></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea name="message" id="message" class="form-control"></textarea>
            <label for="message">Message</label>
            <span class="input-highlight"></span>
          </div>
        </div>
      </div>
      <div class="col-md-10 mx-auto mt-3">
        <button type="submit" class="btn btn-lg btn-danger btn-block">Submit</button>
      </div>
    </form>
  </div>
</div>
        
    
    </div>
</div>

@endsection