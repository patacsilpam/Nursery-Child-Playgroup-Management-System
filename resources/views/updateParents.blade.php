@extends('layout.master')
@section('Title','Update Parent Information')
@section('main')
	
	<div class="box">
		<hr>
		<h1 id="box-h2">Update</h1>
		<p id="nursery-title">Edit Parents Information</p>
		@if(isset($msg))
		<i id="update-msg">{{$msg}}</i>
		@endif
		<div class="input-fields">
			<form action="/updateParents{{ $parents[0]->ParentID }}" method="POST">
				@csrf
		<!--Parent Info-->
		<div class="input-fields">
			<div>
				<label>Parent Title</label>
				<input type="text" name="ParentTitle" placeholder="Parent Title" value="{{ $parents[0]->ParentTitle }}">
			</div>
			<div>
				<label>First Name (Father)</label>
				<input type="text" name="father_fname" placeholder="First Name" value="{{ $parents[0]->father_fname }}">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="father_lname" placeholder="Last Name" value="{{$parents[0]->father_lname }}">
			</div>
			<div>
				<label>First Name (Mother)</label>
				<input type="text" name="mother_fname" placeholder="First Name" value="{{$parents[0]->mother_fname }}">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="mother_lname" placeholder="Last Name" value="{{$parents[0]->mother_lname }}">
			</div>
			<div>
				<label>Street Address</label>
				<input type="text" name="streetAddress" placeholder="Street Address" value="{{$parents[0]->streetAddress }}">
			</div>
			<div>
				<label>City/Town</label>
				<input type="text" name="town_city" placeholder="City" value="{{$parents[0]->town_city}}">
			</div>
			<div>
				<label>Province/States</label>
				<input type="text" name="province_states" placeholder="Province/States" value="{{$parents[0]->province_states}}">
			</div>
			<div>
				<label>Postal Code</label>
				<input type="text" name="postalCode" placeholder="Postal Code" value="{{$parents[0]->postalCode}}">
			</div>
			<div>
				<label>Phone 1</label>
				<input type="text" name="homePhone" placeholder="Mobile Phone (Home)" value="{{$parents[0]->homePhone}}">
			</div>
			<div>
				<label>Phone 2</label>
				<input type="text" name="workPhone" placeholder="Mobile Phone (Work)" value="{{$parents[0]->workPhone}}">
			</div>
			<div>
				<input type="Submit" name="btnUpdate" value="Update Record" id="btn-submit">
				<a href="/parents" id="backRecord"><i class="fa fa-arrow-left"> Back</i></a>
			</div>
		</form>
		</div>
	</div>
@endsection
@section('footer')

@endsection
