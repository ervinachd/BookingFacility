@extends('layouts.app')

@section('content')

@foreach($book as $b)


<div class="content">
<h3 class="text-center">Payment for {{ $b->FacilityName}}</h3>
<br>
<img width="490px" style="margin-left:30px;" src="/img/{{ $b->FacilityImg }}">
<p><b>Verifikasi Pembayaran dilakukan Maksimal 1 Jam</b></p>
<br>
<img width="100px" style="margin-left:30px;" src="/img/bca.png">
<p><b>No. Rekening  : 5434554161 a/n The Seasons City Apartement</b></p>
<br>
<p class="card-text"><b>Price    : Rp. {{number_format ($b->FacilityPrice)}}</b></p>

<form class="inner"action="/user/payment/{{$b->id}}"  enctype="multipart/form-data" method="POST">
        <label class="text-center"><b>Upload Your Transaction</b></label>
      @csrf  
        <input type="file"  class="card-text" name="image" 
       id="image">

            <!-- Error -->
            @if ($errors->has('image'))
        <div class="error">
            {{ $errors->first('image') }}
        </div>
        @endif
        <br>
        <br>
        <input type="submit" name="send" value="Submit" class="btn btn-success"></input>
</div>
</form>
@endforeach
@endsection