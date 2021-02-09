@extends('layout.master')
@section('Title','Parents')
@section('main')
	<div class="box">
		<hr>
		<h1 id="box-h2">Details</h1>
		<p id="nursery-title">Parents</p>
		<div id="add">
			<a href="/register" title="Add Child"><i class="fa fa-user-plus" aria-hidden="true" ></i> </a><br>
		</div>
		<div class="search-area">
			<form action="/searchParents" method="get">
			<button type="submit" id="buttonSearch"><i class="fa fa-search"></i></button>
			<input type="search" name="searchParents" placeholder="Search First Name" id="btn-search">
			</form>
		</div>
		<div>
		<table align="center">
			<tr>
				<th><p class="p">Parent ID<p></th>
				<th><p class="p">Parent Title<p></th>
				<th><p class="p">Fathers'name</p></th>
				<th><p class="p">Mother's name</p></th>
				<th><p class="p">Address</p></th>
				<th><p class="p">Postal Code</p></th>
				<th><p class="p">Province/States</p></th>
				<th><p class="p">Mobile Phone (home)</p></th>
				<th><p class="p">Mobile Phone (work)</p></th>
				<th><p class="p">Action</p></th>
			</tr>
			@foreach($parents as $parents)
			<tr>
				<td>{{$parents->ParentID}}</td>
				<td>{{$parents->ParentTitle}}</td>
				<td>{{$parents->father_fname}} {{$parents->father_lname}}</td>
				<td>{{$parents->mother_fname}} {{$parents->mother_lname}}</td>
				<td>{{$parents->streetAddress}} {{$parents->town_city}}</td>
				<td>{{$parents->postalCode}}</td>
				<td>{{$parents->province_states}}</td>
				<td>{{$parents->homePhone}}</td>
				<td>{{$parents->workPhone}}</td>
				<td>
					<a href="/updateParents{{$parents->ParentID}}" class="link-btn"><i class="fa fa-pencil-square-o" title="Edit" ></i></a>
					<a href="/parents{{$parents->ParentID}}" id="btn-edit" class="link-btn"><i class="fa fa-trash" title="Delete" ></i></a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	</div>
@endsection
