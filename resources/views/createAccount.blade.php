@extends('layout.masterForm')
@section('Title','Create Account')
@section('CreateForm')
	<div class="box">
		<h2>Create account</h2>
		<div class="box-content">
		<div >
			<label>First Name</label>
			<input type="text" name="fname" placeholder="First Name">
		</div>
		<div>
			<label>Last Name</label>
			<input type="text" name="lname" placeholder="Last Name">
		</div>
		<div>
			<label>Username</label>
			<input type="text" name="uname" placeholder="Username">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="pword" placeholder="Password">
		</div>
		
		<div>
			<a href="#"><input type="submit" name="btn-submit" id="btn-submit"></a>
		</div>
		</div>
	</div>
@endsection