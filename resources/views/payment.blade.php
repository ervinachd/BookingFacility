@extends('layouts.log')

@section('main')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<br></br>

<h1 class='text-center'> Booking List Waiting Confirmation</h1>
<div class='container'>
</br>
<table class="table table-bordered table-striped table-highlight">
<thead>
		<tr bgcolor="#c7c7c7">
		<th width="200px">No</th>
             <th width="200px">User Name</th>
			<th width="200px">Facility Name</th>
			<th width="200px">Date</th>
			<th width="200px">Status</th>
            <!-- <th width="200px">Transaction</th> -->
			<th width="200px">Action</th>
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($waiting as $fac)
		<tbody>
		<tr>
		<td>{{ $no++ }}</td>
             <td>{{ $fac->name }}</td>
			<td>{{ $fac->FacilityName }}</td>
			<td>{{ $fac->BookingDate }}</td>
		
            <td> 
				@if( $fac->status == 'success')
				<p class="text-success">{{$fac->status}}</p>
				
				@else
					<p class="text-danger">{{$fac->status}}</p>
				
				@endif
            <!-- <td><img style="width: 5rem;" src="/img/{{ $fac->image }}" ></td> -->
			
			<td><a class="btn btn-info" href=" /adminfacility/transaction/{{ $fac->transaction_id }}">View Details</a>

			<a class="btn btn-success" href="{{route('admin.approve', $fac->transaction_id)}}">Approve</a>

			<a class="btn btn-warning" href=" /adminfacility/pending/{{ $fac->transaction_id }}">Pending</a></td>	
		</td>
		</tr>
		</tbody>
		@endforeach
	</table>

	
<h1 class='text-center'> Booking List Pending Payment</h1>
<div class='container'>
</br>
<table class="table table-bordered table-striped table-highlight">
<thead>
		<tr bgcolor="#c7c7c7">
		<th width="200px">No</th>
             <th width="200px">User Name</th>
			<th width="200px">Facility Name</th>
			<th width="200px">Date</th>
			<th width="200px">Status</th>
            <!-- <th width="200px">Transaction</th> -->
			<th width="200px">Action</th>
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($pending as $fac)
		<tbody>
		<tr>
		<td>{{ $no++ }}</td>
             <td>{{ $fac->name }}</td>
			<td>{{ $fac->FacilityName }}</td>
			<td>{{ $fac->BookingDate }}</td>
		
            <td> 
				@if( $fac->status == 'success')
				<p class="text-success">{{$fac->status}}</p>
				
				@else
					<p class="text-danger">{{$fac->status}}</p>
				
				@endif
            <!-- <td><img style="width: 5rem;" src="/img/{{ $fac->image }}" ></td> -->
			
			<td><a class="btn btn-info" href=" /adminfacility/detailpending/{{ $fac->transaction_id }}">View Details</a>

			<a class="btn btn-success" href="{{route('admin.approve', $fac->transaction_id)}}">Approve</a>

			<a class="btn btn-warning" href=" /adminfacility/pending/{{ $fac->transaction_id }}">Pending</a></td>	
		</td>
		</tr>
		</tbody>
		@endforeach
	</table>
@endsection