<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/Design/login.css">
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
			<h1 id="login-text">Login</h1>
		</div>
		<div>
			<i class="fa fa-user" style="font-size: 36px;"></i>
			<input type="email" name="email" placeholder="Email address or Username"><br>
		</div>
		<div>
			<i class="fa fa-key" style="font-size: 36px;"></i>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div>
			<br>
			<a href="#" id="forgotpassword">Forgot Password?</a>
		</div>
		<div>
			<button id="button" type="Submit">Sign in</button><br>
			<p id="text-account">Don't have an account yet?<a href="/register">Sign up</a></p>
		</div>
	</div>
</body>
</html>