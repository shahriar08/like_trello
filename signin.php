<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="eng">
    <head>
        <link rel="stylesheet" type="text/css" href="signin-style.css">
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
                        <h1 class="signup">Log In</h1>
                        <form method="post" action="signin.php">
                            <?php include('errors.php'); ?>
                            
                                
                                <input type="text" name="username"  placeholder="Username">
                            
                            
                                
                                <input type="password" name="password" placeholder="Password">
                            
                            
                                <input type="submit" name="login_user" value="signin"/>
                            
                            <p>
                                Not yet a member? <a href="register.php">Sign up</a>
                            </p>
                          </form>         
                    </div>
        </section>
    <footer class="foo">
            <p>Copyright to &copy; LazyCode</p>
    </footer>
                
        
</body>
</html>