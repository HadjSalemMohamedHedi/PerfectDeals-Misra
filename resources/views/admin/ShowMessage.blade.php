@extends('layoutAdmin')
@section('content')

<div class="container">


<div class="chat">
  <div class="chat-header clearfix">
    <div class="chat-about">
      <div class="chat-with">Subject : {{$message->subject}}</div>
    </div>
    <i class="fa fa-star"></i>
  </div>
  <!-- end chat-header -->

  <div class="chat-history">
    <ul>
      <i class="clearfix">
        <div class="message-data align-right">
          <span class="message-data-time">{{$message->created_at}}</span> &nbsp; &nbsp;
          <span class="message-data-name">{{$message->name}}</span> <i class="fa fa-circle me"></i>

        </div>
        <div class="message other-message float-right">
        {{$message->message}}
              </div>
</i>
</div>
@endsection



