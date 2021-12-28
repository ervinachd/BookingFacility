@extends('layouts.app')

@section('content')
<br>
<h1 class='text-center'>Your Payment Pending Because</h1>
<div class="container">
 <table class="table table-dark">
<thead>
		<tr>
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
			<td>{{ $f->pendingDesc }}</td>
            <td><img style="width: 400px;" src="/img/{{ $f->pendingImg }}" alt="" title=""></td>
		</tr>
		</tbody>
		@endforeach
	</table>
    <br></br>

    <h3>Please re-upload the missing transaction to booking your facility</h3>
    <form class="inner"action="/user/pending/{{$f->transaction_id}}"  enctype="multipart/form-data" method="POST">
    @csrf  
        <input type="file"  class="card-text" name="ImageUpload" 
       id="ImageUpload">

            <!-- Error -->
            @if ($errors->has('ImageUpload'))
        <div class="error">
            {{ $errors->first('ImageUpload') }}
        </div>
        @endif
        <br></br>
        <input type="submit" name="send" value="Submit" class="btn btn-success"></input>


@endsection