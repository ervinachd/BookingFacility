@extends('layouts.log')

@section('main')
<br>
<h1 class='text-center'>Payment Pending</h1>

<div class="pull-right">
                <a class="btn btn-primary" href="/payment"> Back</a>
                <br></br>
            </div>
<div class="container">
 <table class="table table-dark">
<thead>
		<tr>
        <th width="200px">User Name</th>
			<th width="200px">Reason Pending Payment</th>
            <th width="200px">Image</th>

            
		</tr>
</thead>
		@php
			$no = 1;	
		@endphp
		@foreach($list as $f)
		<tbody>
		<tr>
        <td>{{ $f->name }}</td>
			<td>{{ $f->pendingDesc }}</td>
            <td><img style="width: 400px;" src="/img/{{ $f->pendingImg }}" alt="" title=""></td>
		</tr>
		</tbody>
		@endforeach
	</table>
    <br></br>
@endsection