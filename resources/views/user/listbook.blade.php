@extends('layouts.app')

@section('content')
<br></br>
<div class="pull-right">
                <a class="btn btn-primary" href="/home"> Back</a>
                <br></br>
            </div>
<h1 class='text-center'> Your List Booking</h1>
<div class='container'>
</br>
<table class="table">
<thead  class="thead-dark">
		<tr>
			<th width="200px">Facility Name</th>
			<th width="200px">Date</th>
			<th width="200px">Time Start</th>
			<th width="200px">Time End</th>
			<th width="200px">Status</th>
			
			
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($list as $fac)
	
		<tbody>
		<tr>
			<td>{{ $fac->FacilityName }}</td>
			<td>{{ $fac->Date }}</td>
			<td>{{ $fac->Time_Start }}</td>
			<td>{{ $fac->Time_End }}</td>
            <td> 
				@if( $fac->status == 'Success')
				<p class="text-success">{{$fac->status}}</p>
				<a class="btn btn-success" href="/user/receipt/{{ $fac->booking_id }}" role="button">Receipt</a>
			@else
				<p class="text-danger">{{$fac->status}}</p>

			@endif
			</td>
			
		</tr>
		</tbody>

		@endforeach
	</table>
@endsection