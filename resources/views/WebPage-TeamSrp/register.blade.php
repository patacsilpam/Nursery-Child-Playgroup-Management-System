<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="/Design/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<h1 id="header-team-name">SRP</h1>
		<nav class="nav">
			<div class="nav-link">
				<a href="/home">Home</a>
				<a href="/contact">Contact Us</a>
				<a href="/about">About Us</a>
			</div>
			<a href="/login"><button type="Submit" id="login-btn">Login</button></a>
		</nav>
		<hr>
	</header>
	<div class="box">
		<div>
			<h1 id="register-text">Create an Account</h1>
		</div>
		<div>
			<i class="fa fa-user" style="font-size: 36px;"></i>
			<input type="username" name="username" placeholder="Username">
		</div>
		<div>
			<i class="fa fa-key" style="font-size: 36px;"></i>
			<input type="Password" name="Password" placeholder="Password">
		</div>
		<div>
			<i class="fa fa-envelope" style="font-size: 36px;"></i>
			<input type="email" name="email" placeholder="Email Address"><br>
		</div>
		<div>
			<button id="button" type="Submit">Register</button><br>
			<p id="text-account">Already have an account?<a href="/login"> Sign in</a></p>
		</div>
	</div>
</body>
</html>