@extends('layouts.log')

@section('main')
<br></br>

<h1 class='text-center'> List Facility</h1>
<div class="col text-center">
	
<a class="btn btn-success text-center" href="/adminfacility/newfacility" role="button">Add New Facility</a>
</div>
<div class="pull-right">
                <a class="btn btn-primary" href="/home"> Back</a>
                <br></br>
            </div>
<br>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<div class='container'>
</br>
<table class="table">
<thead>
		<tr>
			<!-- <th>No.</th> -->
			<th width="100px">Facility ID</th>
			<th width="200px">Facility Name</th>
			<th width="200px">Action</th>
			<th width="200px">New Facility</th>
            
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($facilities as $fac)
		<tbody>
		<tr>
			<!-- <td>{{ $no++ }}</td> -->
			<td>{{ $fac->facility_id }}</td>
			<td>{{ $fac->FacilityName }}</td>
			<td><a class="btn btn-success" href="/adminfacility/detailfacility/{{ $fac->facility_id }}" role="button">View</a>
			<a class="btn btn-danger" href="/facility/delete/{{ $fac->facility_id }}" role="button">Delete</a></td>
			<td><a class="btn btn-warning" href="/createfacility/{{ $fac->facility_id }}" role="button">Add Shift Time Facility</a></td>
		</tr>
		</tbody>
		@endforeach
	</table>


@endsection