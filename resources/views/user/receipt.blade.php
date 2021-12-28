@extends('layouts.app')

@section('content')
<br></br>
<div class="container">
<div class="gambar" style="margin: auto; width:100px ">
    <img style="width: 100px;"  src="/img/logo-realta.png">
</div>
<hr size="10px" width="100%" align="left">

@foreach($receipt as $r)
<div class="text-white" style="background-color:black;">
<h1>Receipt #{{$r->booking_id}}</h1>
</div>
<h3>Thanks {{$r->name}} for your order!</h3>
<h8>Show this receipt to use your facility </h8>
<div class="left" style="background-color:#d1d8e0;">
<h4 class="left"  style="padding-left:20px;">Date, {{$r->Date}}</h4>
<br>
<h4 class="text-left"  style="padding-left:20px;">Facility      &emsp;&emsp;&emsp;&emsp;&emsp;: {{$r->FacilityName}}</h4>
<h4 class="text-left"  style="padding-left:20px;">Time          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$r->Time_Start}} - {{$r->Time_End}}</h4>
<h4 class="text-left"  style="color:green;padding-left:20px;padding-bottom:20px;">Status    &emsp;&emsp;&emsp; &emsp;&emsp;: {{$r->status}}</h4>

</div>
<br></br>
@if($r->FacilityPrice == 0)
<button type="button" class="btn btn-dark text-center"><a href="/user/receipt/delete/{{$r->booking_id}}" style="color:white; text-decoration:none;">Cancel Booking</a></button>
<button type="button" class="btn btn-dark text-center"><a href="/home" style="color:white; text-decoration:none;">Back To Home</a></button>

@else
<button type="button" class="btn btn-dark text-center"><a href="/home" style="color:white; text-decoration:none;">Back To Home</a></button>
@endif
</div>

@endforeach
@endsection