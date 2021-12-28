@extends('layouts.log')

@section('main')

<h1 class='text-center'>Pending Payment</h1>
@foreach($leave as $a)
<form action="/adminfacility/pending/{{$a->transaction_id}}" method="POST" enctype="multipart/form-data" >

    @csrf
    <div class="form-group">
        <label>Reason the Payment Pending</label>
        <textarea class="form-control {{ $errors->has('PendingDesc') ? 'error' : '' }}" name="PendingDesc" id="PendingDesc"
        rows="4"> </textarea>
        <!-- Error -->
        @if ($errors->has('PendingDesc'))
        <div class="error">
            {{ $errors->first('PendingDesc') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Payment Pending Image</label>
        <input type="file" class="form-control {{ $errors->has('PendingImg') ? 'error' : '' }}" name="PendingImg" 
       id="PendingImg">

            <!-- Error -->
            @if ($errors->has('PendingImg'))
        <div class="error">
            {{ $errors->first('PendingImg') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
@endforeach

@endsection