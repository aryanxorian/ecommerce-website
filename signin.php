<?php
    require_once("signin_validate.php");
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign In</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container property">
            <div class="row">
                <div class="col-4 align-self-start"></div>
                    <div class="col-4 align-self-center">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="avatar"><i class="fa fa-user"></i></div>
                            <h4>Login to Your Account</h4>
                            <div class="form-group">
                                <input type="email" name="username"class="form-control" placeholder="email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" name ="password" class="form-control" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                                
                                <a href="#" class="forgot-link">Forgot Password?</a>
                            </div> 
                            <input type="submit" class="btn btn-success btn-block btn-lg"  name="login" value="Login">              
                        </form>			
                        <div class="text-center small">Don't have an account? <a href="signup.php">Sign up here!</a></div>
                    </div>
                <div class="col-4 align-self-end"></div>
            </div>    
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>