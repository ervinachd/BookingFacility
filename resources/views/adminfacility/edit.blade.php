@extends('layouts.log')

@section('main')

<div class="pull-right">
                <a class="btn btn-primary" href="/facility"> Back</a>
            
            </div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
   @foreach($facil as $f)
	<form action="{{ url('/update', $f->id ) }}" method="POST">
    @csrf
    <h1 class='text-center'>Update Facility</h1>
    
<br></br>
    <div class="form-group">
 

    <div class="form-group">
        <label>Facility Description</label>
        <textarea class="form-control {{ $errors->has('FacilityDesc') ? 'error' : '' }}" name="FacilityDesc" id="FacilityDesc"
        rows="4">{{ $f->FacilityDesc }} </textarea>
        <!-- Error -->
        @if ($errors->has('FacilityDesc'))
        <div class="error">
            {{ $errors->first('FacilityDesc') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Kuota</label>
        <input type="text" class="form-control {{ $errors->has('FacilityKuota') ? 'error' : '' }}" name="FacilityKuota"
        value="{{ $f->FacilityKuota }}" id="FacilityKuota">

           <!-- Error -->
           @if ($errors->has('FacilityKuota'))
        <div class="error">
            {{ $errors->first('FacilityKuota') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Date</label>
        <input type="text" class="form-control {{ $errors->has('Date') ? 'error' : '' }}" name="Date"
        value="{{ $f->Date }}"id="Date">

        @if ($errors->has('Date'))
        <div class="error">
            {{ $errors->first('Date') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Time Start</label>
        <input type="text" class="form-control {{ $errors->has('Time_Start') ? 'error' : '' }}" name="Time_Start"
        value="{{ $f->Time_Start }}" id="Time_Start">

           <!-- Error -->
           @if ($errors->has('Time_Start'))
        <div class="error">
            {{ $errors->first('Time_Start') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Time End</label>
        <input type="text" class="form-control {{ $errors->has('Time_End') ? 'error' : '' }}" name="Time_End"
        value="{{ $f->Time_End }}" id="Time_End">

           <!-- Error -->
           @if ($errors->has('Time_End'))
        <div class="error">
            {{ $errors->first('Time_End') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Price</label>
        <input type="text" class="form-control {{ $errors->has('FacilityPrice') ? 'error' : '' }}" name="FacilityPrice"
        value="{{ $f->FacilityPrice }}"id="FacilityPrice">

        @if ($errors->has('FacilityPrice'))
        <div class="error">
            {{ $errors->first('FacilityPrice') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Slot</label>
        <input type="text" class="form-control {{ $errors->has('Slot') ? 'error' : '' }}" name="Slot"
        value="{{ $f->Slot }}"id="Slot">

        @if ($errors->has('Slot'))
        <div class="error">
            {{ $errors->first('Slot') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">

</form>
@endforeach
</div>
@endsection