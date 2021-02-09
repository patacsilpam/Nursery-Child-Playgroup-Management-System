@extends('layout.view')
@section('Title','Parents Information')
@section('view-content')
	<div id="container">
		<div class="view-con">
		<h1 id="header-details">Parents Information</h1>
		@foreach($parents as $parents)
			<table>
				<tr class="t-row1">
					<td><b>Child ID</b></td>
					<td>{{$parents->ChildID}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Parent Title</b></td>
					<td>{{$parents->ParentTitle}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Father</b></td>
					<td>{{$parents->father_fname}} {{$parents->father_lname}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Mother</b></td>
					<td>{{$parents->mother_fname}} {{$parents->mother_lname}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Address</b></td>
					<td>{{$parents->streetAddress}} </td>
				</tr>
				<tr class="t-row2">
					<td><b>Town/City</b></td>
					<td>{{$parents->town_city}} </td>
				</tr>
				<tr class="t-row1">
					<td><b>Postal Code</b></td>
					<td>{{$parents->postalCode}} </td>
				</tr>
				<tr class="t-row2">
					<td><b>Province</b></td>
					<td>{{$parents->province_states}} </td>
				</tr>
				<tr class="t-row1">
					<td><b>Mobile Phone (Home)</b></td>
					<td>{{$parents->homePhone}} </td>
				</tr>
				<tr class="t-row2">
					<td><b>Mobile Phone (work)</b></td>
					<td>{{$parents->workPhone}} </td>
				</tr>
				<tr>
					<td><a href="/viewParentsInformation" style=""><i style="font-size:24px; margin-left: 50%; color: #242526;">View Parents Information</i></a></td>
				</tr>
			</table>
		@endforeach
	</div>
	</div>
@endsection