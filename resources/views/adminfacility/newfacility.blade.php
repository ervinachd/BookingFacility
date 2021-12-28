@extends('layouts.log')

@section('main')

<h1 class='text-center'>Create New Facility</h1>
<br></br>
<div class="pull-right">
                <a class="btn btn-primary" href="/facility"> Back</a>
            
            </div>
<form action="/adminfacility/newfacility" method="POST" enctype="multipart/form-data">

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
    @csrf
    <div class="form-group">
        <label>Facility Name</label>
        <textarea class="form-control {{ $errors->has('FacilityDesc') ? 'error' : '' }}" name="FacilityName" id="FacilityName"
        rows="4"> </textarea>
        <!-- Error -->
        @if ($errors->has('FacilityName'))
        <div class="error">
            {{ $errors->first('FacilityName') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Facility Image</label>
        <input type="file" class="form-control {{ $errors->has('FacilityImg') ? 'error' : '' }}" name="FacilityImg" 
       id="FacilityImg">

            <!-- Error -->
            @if ($errors->has('FacilityImg'))
        <div class="error">
            {{ $errors->first('FacilityImg') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
@endsection