@extends('layout.master')
@section('Title','Home')
@section('main')
	<img src="/images/nurBanner.jpg" id="img-dashboard">
	<div class="dashboard-box">
		<div id="box1">
			<a href="/register" id="weekly-box">Register New Child</a>
		</div>
			<div id="box2">
			<a href="/information" id="rgstr-box">Children</a>
		</div>
		<div id="box3">
			<a href="/parents" id="parents-box">Parents</a>
		</div>
	</div>
	
@endsection