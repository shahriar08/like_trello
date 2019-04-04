<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <link rel="stylesheet" type="text/css" href="signup-style.css">
        <title>Signup to...</title>
    </head>
    <body>
            <nav>
                    <div class="row">
                        <img src="logo.png" alt="logo" class="logo">
                        <ul class="main-nav">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="signin.php">Log In</a></li>
                            <li><a href="signup.php">Sign Up</a></li>
                        </ul>
    
                    </div>
            
                </nav>
           
        <section class="sec">
                <div class="login-box">   
                <form method="post" action="signup.php">   
                   <?php include('errors.php'); ?>
                            <h1 class="signup">Sign Up</h1>
                            <input type="text" name="username" placeholder="Username"/>
                            <input type="text" name="email" placeholder="Email"/>
                            <input type="password" name="password_1" placeholder="Password"/>
                            <input type="password" name="password_2" placeholder="Confirm Password"/>
                            <input type="submit" name="reg_user" value="Sign Up"/>
                    </div>
        </section>
    <footer class="foo">
            <p>Copyright to &copy; LazyCode</p>
    </footer>
                
        
</body>
</html>