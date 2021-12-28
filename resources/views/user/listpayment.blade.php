@extends('layouts.app')

@section('content')

<br></br>

<h1 class='text-center'>Payment</h1>
<div class='container'>
</br>
<table class="table">
<thead class="thead-dark">
		<tr bgcolor="#c7c7c7">
		<th width="200px">No</th>
			<th width="200px">Facility Name</th>
			<th width="200px">Date</th>
            <th width="200px">Time</th>
			<th width="200px">Status</th>

            <!-- <th width="200px">Transaction</th> -->
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($list as $fac)
		<tbody>
		<tr>
		    <td>{{ $no++ }}</td>
			<td>{{ $fac->FacilityName }}</td>
			<td>{{ $fac->BookingDate }}</td>
            <td>{{ $fac->Time_Start }} - {{$fac->Time_End}}</td>
            <td> 
				@if( $fac->status == 'Success')
				<p class="text-success">{{$fac->status}}</p>
				<a class="btn btn-success" href="/user/receipt/{{ $fac->booking_id }}" role="button">Receipt</a>
				@elseif( $fac->status == 'Pending Payment')
				
				<p class="text-danger">{{$fac->status}}</p>
			
				<a class="btn btn-success" href="/user/pending/{{$fac->transaction_id}}" role="button">Details Pending Payment</a>
				@else
					<p class="text-danger">{{$fac->status}}</p>
				
				@endif
            <!-- <td><img style="width: 5rem;" src="/img/{{ $fac->image }}" ></td> -->
            
		</tr>
		</tbody>
		@endforeach
	</table>

@endsection