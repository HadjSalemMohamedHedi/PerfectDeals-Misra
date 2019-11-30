<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الميسرة</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      
       <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
         crossorigin="anonymous">



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

            <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
            <script src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button>
 <img src="{{ asset('img/logo.png') }}"> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/Deals">Deals</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/ListeTikets">Tickts</a>
      </li>
        
       </ul>
       <ul class="nav navbar-nav navbar-right">
       <a class="nav-link" href="/contactus">Contact US </a>
             
              <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           
                            @if (Route::has('register'))
                            <a class="nav-link" href="/Compte">Mon Compte </a>

                            @endif
                        @else






                            <li class="nav-item dropdown">
                                <a class="nav-link"  href="/usercompte">
                                    {{ Auth::user()->name }} 
                                </a>                                
                            </li>

                                <li class="nav-item dropdown">
                                <a class="nav-link"  href="/logout">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a> </li>
                                <li>

                         <a  class="btn btn-outline-warning" href="/DealsManagements">administrator</a>                                
                            </li>
                                                    

                        @endguest
                    </ul>
      </ul>
  
  </div>
  </div>
</nav>


<div style="float:left;width:25%;height:80%;border-right:2px solid #123;padding-top:5%;">
<div class="list-group">
  <a href="/DealsManagements" class="list-group-item list-group-item-action list-group-item-light">Deals Managements</a>
</div>
<div class="list-group">
  <a href="/UsersManagements" class="list-group-item list-group-item-action list-group-item-light">Users Managements</a>
</div>
<div class="list-group">
  <a href="/TiketsManagements" class="list-group-item list-group-item-action list-group-item-light">Tickets Managements</a>
</div>
<div class="list-group">
  <a href="#!" class="list-group-item list-group-item-action list-group-item-dark">My account</a>
</div>



</div>


<div style="float:right;width:75%;background:#f5f5f5;padding:5%">
@yield('content')
</div>






        
    </body>
</html>
