@extends('layouts.app')

@section('content')
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

<div class="container">
 <table class="table table-dark">
<thead>
		<tr>
			<th width="100px">Facility ID</th>
			<th width="200px">Facility Name</th>
            <th width="200px">Facility Desc</th>
            <th width="200px">Facility Slot</th>
			<th width="200px">Facility Date</th>
            <th width="200px">Facility Time Start</th>
            <th width="200px">Facility Time End</th>
            <th width="200px">Facility Kuota</th>
            <th width="200px">Facility Price</th>
			<th width="200px">Booking</th>

            
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($search as $f)
		<tbody>
		<tr>
			<td>{{ $f->id }}</td>
			<td>{{ $f->FacilityName }}</td>
            <td>{{ $f->FacilityDesc }}</td>
            <td>{{ $f->Slot }}</td>
			<td>{{ Carbon\Carbon::parse($f->Date)->format('m-d-Y') }}</td>
            <td>{{ $f->Time_Start }}</td>
            <td>{{ $f->Time_End }}</td>
            <td>{{ $f->FacilityKuota }}</td>
            <td>{{ $f->FacilityPrice }}</td>
			<td><a class="btn btn-success" href="/user/detailshowbook/{{ $f->id }}" role="button">Book</a></td>
		</tr>
		</tbody>
		@endforeach
	</table>
</div>
@endsection