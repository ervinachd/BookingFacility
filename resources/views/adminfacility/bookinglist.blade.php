@extends('layouts.log')

@section('main')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<br></br>

<h1 class='text-center'> Booking List Success</h1>
<div class='container'>
</br>
<table class="table">
<thead class="thead-dark">
		<tr bgcolor="#c7c7c7">
		<th width="200px">No</th>
             <th width="200px">User Name</th>
			<th width="200px">Facility Name</th>
			<th width="200px">Date</th>
			<th width="200px">Status</th>
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($success as $a)
		<tbody>
		<tr>
		<td>{{ $no++ }}</td>
             <td>{{ $a->name }}</td>
			<td>{{ $a->FacilityName }}</td>
			<td>{{ $a->BookingDate }}</td>
		
            <td> 
				<p class="text-success">{{$a->status}}</p>
			</td>
		</tr>
		</tbody>
		@endforeach
	</table>
@endsection