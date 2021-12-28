@extends('layouts.app')

@section('content')
<br></br>
<div class="container">
<div class="gambar" style="margin: auto; width:100px ">
    <img style="width: 100px;"  src="/img/error.png">
</div>
<br></br>
<h1 class="text-center">Sorry!</h1>
<h3 class="text-center">Your Facility Has No Kuota!</h3>

<button type="button" class="btn btn-dark text-center"><a href="/home" style="color:white; text-decoration:none;">Back To Home</a></button>
</div>
@endsection