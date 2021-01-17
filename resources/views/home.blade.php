<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <title>Home</title>
    </head> 
    <body>
        <div class="header-texts">
            <header><h2>Team SRP</h2></header>
            <nav>
                <li>
                    <a href="/login"><ul><button class="login-btn" type="Submit">Login</button></ul></a>
                    <a href="#"> <ul>Contact Us</ul></a>
                    <a href=""><ul>About Us</ul></a>
                    <a href=""><ul>Home</ul></a>
                </li>
            </nav>
        </div>
        <br><br><hr>
        <section>
            <div class="section-team-name">
               <h2>WE ARE SRP TEAM</h2> 
            </div>
            
            <div class="section-texts">
                <p>WE THINK. WE CREATE.</p>
                <p>WE DESIGN.</p>
            </div>
            <a href="/register"><button type="Submit" class="register-btn"> Register</button></a>
        </section>
       
    </body>
</html>
