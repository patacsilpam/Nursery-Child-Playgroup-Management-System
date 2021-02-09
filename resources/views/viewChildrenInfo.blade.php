@extends('layout.view')
@section('Title','Profile')
@section('view-content')
	<div id="container">
		<div class="view-con">
		<h1 id="header-details">Nursery/Child Profile</h1>
	
			<table>
					@foreach($profile as $profile)
				<tr class="t-row1">
					<td><b>Child ID</b></td>
					<td>{{$profile->ChildID}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>First Name</b></td>
					<td>{{$profile->fname}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Last Name</b></td>
					<td>{{$profile->lname}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Gender</b></td>
					<td>{{$profile->gender}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Birthday</b></td>
					<td>{{$profile->dobday}}/{{$profile->dobmonth}}/{{$profile->dobyear}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Admission Date</b></td>
					<td>{{$profile->admitday}}/{{$profile->admitmonth}}/{{$profile->admityear}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Parent ID</b></td>
					<td>{{$profile->ParentID}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Parent Title</b></td>
					<td>{{$profile->ParentTitle}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Father</b></td>
					<td>{{$profile->father_fname}} {{$profile->father_lname}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Mother</b></td>
					<td>{{$profile->mother_fname}} {{$profile->mother_lname}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Address</b></td>
					<td>{{$profile->streetAddress}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>City/Town</b></td>
					<td>{{$profile->town_city}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Postal Code</b></td>
					<td>{{$profile->province_states}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Mobile Phone (Home)</b></td>
					<td>{{$profile->homePhone}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Mobile Phone (Work)</b></td>
					<td>{{$profile->workPhone}}</td>
				</tr>
				<tr>
					<td>Guardian 1</td>
				</tr>
				<tr class="t-row2">
					<td><b>Name</b></td>
					<td>{{$profile->guardian_fname1}} {{$profile->guardian_lname1}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Relationship</b></td>
					<td>{{$profile->guardian_rel1}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Mobile Phone</b></td>
					<td>{{$profile->guardian_Phone1}}</td>
				</tr>
				<tr>
					<td>Guardian 2</td>
				</tr>
				<tr class="t-row1">
					<td><b>Name</b></td>
					<td>{{$profile->guardian_fname2}} {{$profile->guardian_lname2}}</td>
				</tr>
				<tr class="t-row2">
					<td><b>Relationship</b></td>
					<td>{{$profile->guardian_rel2}}</td>
				</tr>
				<tr class="t-row1">
					<td><b>Mobile Phone</b></td>
					<td>{{$profile->guardian_Phone2}}</td>
				</tr>
				@endforeach
			</table>
			<div id="margin">
				<a href="/information" id="backRecord"><i class="fa fa-arrow-left"> Back to Records</i></a>
			</div>
			
		
	</div>
	</div>
@endsection