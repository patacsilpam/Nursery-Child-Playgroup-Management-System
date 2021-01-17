<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Css/login1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>
	<div class="container">
        <img src="/Image/image.jpg">
         <header>
            <h2 id="header-team">SRP</h2>
                <nav>
                    <a href="/" class="navlist">Home</a>
                    <a href="/about" class="navlist">About Us</a>
                    <a href="/contact" class="navlist">Contact Us</a>
                    <a href="/login1"><button type="Submit" id="login-btn">Login</button></a>
                </nav>
        </header>
        <div class="box">
			<h3>Login</h3>
		<div class="input-container">
			<i class="fa fa-user" style="font-size: 36px;"></i>
			<input type="email" name="email" placeholder="Enter email or username"><br><br>
		</div>
		<div class="input-container">
			<i class="fa fa-key" style="font-size: 36px;"></i>
			<input type="password" name="password" placeholder="Password"><br>
		</div>
		<a href="#" id="forgotpassword">Forgot Password?</a><br><br><br>
		<button type="Submit" id="btn-submit"> Sign in</button>
		<p>Don't have an account?<a href="/register" id="Sign-up"> Sign up</a></p>
    </div>

</body>
</html>