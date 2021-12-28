@extends('layouts.app')

@section('content')
@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
<section id="cover">
     <div id="cover-caption">
         <div id="container">
             <div class="col-sm-10 col-sm offset-1">
                 <h1 class="display-3">BOOK YOUR FACILITY NOW</h1>
                 <br></br>
                 <a class="btn btn-success text-center" href="/user/booking" role="button">BOOK NOW</a>
             </div>
         </div>
     </div>
 </section>

 <br>
 <h1 class="display-5 text-center">OUR FACILITY</h1>
  <div class="album py-5 bg-light">

  <div class="col">
 <div class="card-group">
 
   <div class="card">
  <img src="/img/gym.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Gym</p>
  </div>
  </div>
 <div class="card">
  <img src="/img/function.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Function Hall</p>
  </div>
</div>
<div class="card">
  <img src="/img/kolamrenang.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Kolam Renang</p>
  </div>
</div>
<div class="card" >
  <img src="/img/lapbasket.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Lapangan Basket</p>
  </div>
</div>
<div class="card">
  <img src="/img/laptenis.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Lapangan Tennis</p>
  </div>
</div>

</div>   
</div>

</div>

@endsection
