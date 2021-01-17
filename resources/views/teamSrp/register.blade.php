<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="Css/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<header>
        	<h2 id="header-team">SRP</h2>
        	<nav>
	            <a href="/" class="navlist">Home</a>
	            <a href="/about" class="navlist">About Us</a>
	            <a href="/contact" class="navlist">Contact Us</a>
	            <a href="/login"><button type="Submit" id="login-btn">Login</button></a>
        	</nav>
        	<br><br><br><br><br><hr>
    	</header>
		<div class="box">
			<div>
				<p id="create-text-account">Create an Account</p>
				<i class="fa fa-user" style="font-size: 36px;"></i>
				<input type="username" name="email" placeholder="Username(eg. teamsrp)" ><br><br>
			</div>
		<div>
			<i class="fa fa-envelope" style="font-size: 36px;"></i>
			<input type="email" name="email" placeholder="Enter your email adderess"><br><br>
		</div>
		<div>
			<i class="fa fa-key" style="font-size: 36px;"></i>
			<input type="password" name="password" placeholder="Password"><br><br>
		</div>
			<button type="Submit" id="register-btn">Register</button>
			<p id="login">Already have an account? <a href="/login">Login</a></p>
		</div>
	</div>
</body>
</html>