@extends('layouts.app')

@section('content')
<br>
<div class="pull-right">
                <a class="btn btn-primary" href="/user/booking"> Back</a>
                <br></br>
            </div>
@foreach($book as $b)
<form class="inner"action="/user/detailshowbook/{{ $b->id }}"
                                      method="POST">

<div class="content">
<h3 class="text-center">{{ $b->FacilityName}}</h3>
<br>
<img width="500px" style="margin-left:30px;" src="/img/{{ $b->FacilityImg }}">
<h5 class="card-title">{{$b->FacilityDesc}}</h5>
<p class="card-text">Price    : {{$b->FacilityPrice}}</p>
<p class="card-text">Kuota    : {{$b->FacilityKuota}}</p>
<p class="card-text">Date     : {{$b->Date}}</p>
<p class="card-text">Slot     : {{$b->Slot}}</p>
<p class="card-text">Time Start     : {{$b->Time_Start}}</p>
<p class="card-text">Time End     : {{$b->Time_End}}</p>
<br>

@csrf
<input type="submit" name="send" value="Book" class="btn btn-success"></input>
</div>
</form>
@endforeach


@endsection