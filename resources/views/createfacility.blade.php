@extends('layouts.log')

@section('main')

<h1 class='text-center'>Create Shift Time Facility</h1>

<div class="pull-right">
                <a class="btn btn-primary" href="/facility"> Back</a>
            </div>
@foreach($facil as $f)
<form action="/createfacility/{{$f->facility_id}}" method="POST" enctype="multipart/form-data">

@if(Session::has('alert'))
            <div class="alert alert-success">
                {{Session::get('alert')}}
            </div>
        @endif
    @csrf


    <div class="form-group">
        <label>Facility Description</label>
        <textarea class="form-control {{ $errors->has('FacilityDesc') ? 'error' : '' }}" name="FacilityDesc" id="FacilityDesc"
        rows="4"> </textarea>
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
        id="FacilityKuota">

           <!-- Error -->
           @if ($errors->has('FacilityKuota'))
        <div class="error">
            {{ $errors->first('FacilityKuota') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Date</label>
        <input type="date" class="form-control {{ $errors->has('Date') ? 'error' : '' }}" name="Date"
        id="Date">

        @if ($errors->has('Date'))
        <div class="error">
            {{ $errors->first('Date') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Time Start</label>
        <input type="time" class="form-control {{ $errors->has('Time_Start') ? 'error' : '' }}" name="Time_Start" id="Time_Start">

           <!-- Error -->
           @if ($errors->has('Time_Start'))
        <div class="error">
            {{ $errors->first('Time_Start') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Time End</label>
        <input type="time" class="form-control {{ $errors->has('Time_End') ? 'error' : '' }}" name="Time_End"
         id="Time_End">

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
       id="FacilityPrice">

        @if ($errors->has('FacilityPrice'))
        <div class="error">
            {{ $errors->first('FacilityPrice') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Slot</label>
        <input type="text" class="form-control {{ $errors->has('Slot') ? 'error' : '' }}" name="Slot"
        id="Slot">

        @if ($errors->has('Slot'))
        <div class="error">
            {{ $errors->first('Slot') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
@endforeach
</form>
@endsection