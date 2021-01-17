<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <title>Home</title>
    </head> 
    <body>
        <div class="container">
             <img src="/Image/image.jpg">
             <div class="text-center">
                    <i class="text-tagline" id="align-italic-texts"> We build something together.</i><br><br>
                    <p class="text-tagline">THINK. DESIGN. INNOVATE</p>
                    <a href="/register"><button type="Submit" id="register-btn"> GET STARTED</button></a>
            </div>
        </div>
         <header>
            <h2 id="header-team">SRP</h2>
                <nav>
                    <a href="/" class="navlist">Home</a>
                    <a href="/about" class="navlist">About Us</a>
                    <a href="/contact" class="navlist">Contact Us</a>
                    <a href="/login"><button type="Submit" id="login-btn">Login</button></a>
                </nav>

        </header>
        <br><br><hr>
    </body>
</html>
