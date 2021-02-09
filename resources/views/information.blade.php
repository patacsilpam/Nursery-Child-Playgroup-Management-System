@extends('layout.master')
@section('Title','Nursery Information')
@section('main')
	<div class="box">
		<hr>
		<h1 id="box-h2">Details</h1>
		<p id="nursery-title">Registered Child</p>
		<div id="add">
			<a href="/register" title="Register New Child"><i class="fa fa-user-plus" aria-hidden="true"></i> </a><br>
		</div>
		<div class="search-area">
			<form action="/search" method="get">
			<button type="submit" id="buttonSearch"><i class="fa fa-search"></i></button>
			<input type="search" name="search" placeholder="Search First Name" id="btn-search">
			</form>
		</div>
		<div>
		<table align="center">
			<tr>
				<th><p class="p">Child ID</p></th>
				<th><p class="p">Name<p></th>
				<th><p class="p">Gender</p></th>
				<th><p class="p">Birthday</p></th>
				<th><p class="p">Admission Date</p></th>
				<th><p class="p">Note</p></th>
				<th><p class="p">Action</p></th>
			</tr>
			@foreach($profile as $profile)
			<tr>
				<td>{{$profile->ChildID}}</td>
				<td>{{$profile->fname}} {{$profile->lname}}</td>
				<td>{{$profile->gender}}</td>
				<td>{{$profile->dobday}}/{{$profile->dobmonth}}/{{$profile->dobyear}}</td>
				<td>{{$profile->admitday}}/{{$profile->admitmonth}}/{{$profile->admityear}}</td>
				<td>{{$profile->childnotes}}</td>
				<td>
					<a href="/viewChildrenInfo{{$profile->ChildID}}" class="link-btn"><i class="fa fa-eye" title="View" ></i></a>
					<a href="/edit{{$profile->ChildID}}" class="link-btn"><i class="fa fa-pencil-square-o" title="Edit" ></i></a>
					<a href="/information{{$profile->ChildID}}" id="btn-edit" class="link-btn"><i class="fa fa-trash" title="Delete" ></i></a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	</div>
@endsection