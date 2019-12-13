@extends('layout')
@section('content')

<div class="header">
<h1>, وقيت </h1>
<h4>ميسرة</h4>
</div>

<div class="container-fluid contenue1">
<div class="row">
	<div class="col-sm-6"> <img src="{{ asset('img/homeimg/1.png') }}" class="img-fluid"> 	</div>
	<div class="col-sm-6">
		<div class="row"><img src="{{ asset('img/homeimg/2.png') }}" class="img-fluid"> </div>
		<div class="row"><img src="{{ asset('img/homeimg/3.png') }}" class="img-fluid"> </div>
	</div>
</div>
</div>


@endsection