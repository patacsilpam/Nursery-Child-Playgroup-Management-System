@extends('layout.masterForm')
@section('Title','Login')
@section('CreateForm')
	<div class="login-box">
		<div id="content">
			<h2 id="login-text">L O G I N</h2>
			<form action="/index" method="get">
				@csrf
				<input type="text" name="uname" placeholder="Username" class="input-lgn">			
				<input type="password" name="password" placeholder="Password" class="input-lgn">
				<a href="/index"><input type="submit" name="lgn-btn" class="input-lgn" id="lgn-submit"></a>
				<a href="" id="reset">Reset Account</a>
			</form>
		</div>
	</div>
@endsection