@extends('layouts.app')

@section('content')
<br></br>
<div class="container">
<div class="gambar" style="margin: auto; width:100px ">
    <img style="width: 100px;"  src="/img/payment.png">
</div>
<br></br>
<h1 class="text-center">Success!</h1>
<h3 class="text-center">Your Transaction has been processed successfully</h3>
<p class="text-center">Please Wait for Next Confirmation</p>
<button type="button" class="btn btn-dark text-center"><a href="/home" style="color:white; text-decoration:none;">Back To Home</a></button>
</div>
@endsection