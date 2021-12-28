@extends('layouts.log')

@section('main')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class='text-center'> Transaction</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/adminfacility/bookinglist"> Back</a>
            </div>
        </div>
    </div>
    <div class="content">
     @foreach($trans as $t)
     <img width="700px" style="margin-left:100px;" src="/img/{{ $t->image }}">
<br>
<br>
<table class="table table-dark">
<thead>
		<tr>
			<!-- <th>No.</th> -->
			<th width="100px">User Name</th>
			<th width="200px">Facility</th>
            <th width="200px">Date</th>
            <th width="200px">Facility Price</th>
            <th width="200px">Facility Time Start</th>
            <th width="200px">Facility Time End</th>
            <th width="200px">Slot</th>
            <th width="200px">Booking Date</th>

	
            
		</tr>
</thead>
		<tbody>
		<tr>
			<td>{{$t->name}}</td>
            <td>{{$t->FacilityName}}</td>
            <td>{{$t->Date}}</td>
			<td>{{$t->FacilityPrice}}</td>
            <td>{{$t->Time_Start}}</td>
            <td>{{$t->Time_End}}</td>
            <td>{{$t->Slot}}</td>
            <td>{{$t->BookingDate}}</td>
            
		</tr>
		</tbody>
		@endforeach
	</table>
</div>



@endsection