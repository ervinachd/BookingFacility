@extends('layouts.app')

@section('content')
<br></br>
<h1 class="display-5 text-center">OUR FACILITY</h1>
<br>

<div class="pull-right">
                <a class="btn btn-primary" href="/home"> Back</a>
                <br></br>
            </div>
@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

<div class="album py-5 bg-light">
    <div class="container">
        <div class="col">
           <div class="card-group">
        @foreach($facilities as $fac)
          <div class="card">
          <img class="card-img-top" src="/img/{{ $fac->FacilityImg }}" alt="Images">

            <div class="card-body">
             <p> <a class="card-text" href="/user/bookfacility/{{ $fac->facility_id }}">{{ $fac->FacilityName}}<a></p>
            </div>
          </div>
          <br>
          @endforeach
          </div>
        </div>
      </div>


@endsection