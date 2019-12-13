@extends('layout')
@section('content')
@guest

       <br>
              @if (Route::has('register'))
              <div class="container alert alert-danger" role="alert">
  <h4 class="alert-heading">404</h4>
  Accès refusé !!!
</div>
        @endif
     @else

<div class="container-fluid bodycompteuser">
<h4> <img src="{{asset('img/usersimage/user.jpg')}}" class="img-responsive"> {{ Auth::user()->name }}
<i class="fas fa-cog" id="config"></i>
<button type="button" class="btn btn-outline-danger" id="configCancel"><i class="fas fa-times"></i> Cancel</button>
{{Auth::user()->role }}

</h4>



<h5>45 Deals achetés</h5>
<div class="userComptecss" id="configCompte"> 
        <div class="userCompteleft">
        left
        </div>

        <div class="userCompteright">
   
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                  
                        
                          
                             
                    </ul>
                                
        </div>

        </div>
</div>


<script>
  $("#config").click(function(){
    $("#configCompte").slideDown("slow");
    $("#configCancel").show();
    $("#config").hide();
    
      });

  $("#configCancel").click(function(){
    $("#configCompte").slideUp("slow");
    $("#configCancel").hide();
    $("#config").show();
    
 
      }); 
 
  </script>


 @endguest
@endsection