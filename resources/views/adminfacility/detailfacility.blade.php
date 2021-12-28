@extends('layouts.log')

@section('main')
<br></br>

<h1 class='text-center'>Daftar List Facility</h1>
<div class='container'>
</br>
<br></br>
<table class="table table-dark">
<thead class="thead-dark">
		<tr>
			<!-- <th>No.</th> -->
			<th width="100px">Facility ID</th>
			<th width="200px">Facility Name</th>
            <th width="200px">Facility Desc</th>
            <th width="200px">Facility Image</th>
            <th width="200px">Facility Slot</th>
			<th width="200px">Facility Date</th>
            <th width="200px">Facility Time Start</th>
            <th width="200px">Facility Time End</th>
            <th width="200px">Facility Kuota</th>
            <th width="200px">Facility Price</th>
			<th width="200px">Update</th>
			<th width="200px">Delete</th>
            
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($fac as $f)
		<tbody>
		<tr>
			<!-- <td>{{ $no++ }}</td> -->
			<td>{{ $f->id }}</td>
			<td>{{ $f->FacilityName }}</td>
            <td>{{ $f->FacilityDesc }}</td>
            <td><img style="width: 5rem;" src="/img/{{ $f->FacilityImg }}" alt="" title=""></td>
            <td>{{ $f->Slot }}</td>
			<td>{{ Carbon\Carbon::parse($f->Date)->format('m-d-Y') }}</td>
            <td>{{ $f->Time_Start }}</td>
            <td>{{ $f->Time_End }}</td>
            <td>{{ $f->FacilityKuota }}</td>
            <td>{{ $f->FacilityPrice }}</td>
			<td><a class="btn btn-success" href="/adminfacility/edit/{{ $f->id }}" role="button">Update</a></td>
			<td><a class="btn btn-danger" href="/adminfacility/delete/{{ $f->id }}" role="button">Delete</a></td>
		</tr>
		</tbody>
		@endforeach
	</table>


@endsection