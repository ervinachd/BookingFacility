@extends('layouts.app')

@section('content')

<section id="back">
     <div id="back-caption">
         <div id="container">
             <div class="col-sm-10 col-sm offset-1">
                 <h1 class="display-3">Choose Your Date</h1>
                
                 @foreach($facil as $s)
                 <form class="form" method="GET" action="/user/showbook/{{$s->facility_id}}">
                 @csrf
                 <div class="form-group">
                    <input type="Date" class="form-control {{ $errors->has('FacilityKuota') ? 'error' : '' }}" name="date"
                            id="Date" > 
                    <!-- Error -->
                         @if ($errors->has('Date'))
                            <div class="error">
                        {{ $errors->first('Date') }}
                             </div>
                         @endif
                        </input>
                     </div>
                     <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                    @endforeach
                    </form>
<!-- Start kode untuk form pencarian -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
             </div>
         </div>
     </div>
 </section>
 <br>




@endsection