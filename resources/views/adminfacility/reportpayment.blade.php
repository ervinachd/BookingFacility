@extends('layouts.log')

@section('main')

<h1 class='text-center'> Report Payment</h1>
<div class='container'>
</br>
<table class="table table-bordered table-striped table-highlight">
<thead>
		<tr bgcolor="#c7c7c7">
		<th width="200px">No</th>
             <th width="200px">User Name</th>
			<th width="200px">Facility Name</th>
			<th width="200px">Date</th>
		
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($reportpay as $a)
		<tbody>
		<tr>
		<td>{{ $no++ }}</td>
             <td>{{ $a->name }}</td>
			<td>{{ $a->FacilityName }}</td>
			<td>{{ $a->BookingDate }}</td>
		</tr>
		</tbody>
		@endforeach
	</table>

	</br>
	

@endsection