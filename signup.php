<?php
    require_once("validate.php");
?>
<!DOCTYPE HTML>  
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Php Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css"> 
        body{
            font-family: cursive;
            }
        .login-form {
            width: 60%;
            margin: 0 auto;
            padding: 100px 0 30px;    
        }
        .para{
            padding: 10px;
        }
        .error {
            color: #FF0000;
        }
        .box{
            background-color: #ececec;
            padding:4%;
            color:#7a7a7a;
            font-weight: 10px;
            font-family: cursive;
        }
        .h{
            text-align: center;
        }
        .postion{
            text-align: center;
        }
    </style>
    </head>
    <body>
        <div class="container-fluid">    
            <div class="login-form">
                <h2 class="h"><u> SIGNUP HERE!! </h2></u>
                <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                    <div class="form-group box">
                        
                            <label  class="col-sm-12 col-form-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                                <span class = "error">* <?php echo $nameErr;?></span>
                            </div>
                            <label class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                                <span class = "error">* <?php echo $emailErr;?></span>
                            </div>
                        
                        <p>
                            
                                <label  class="col-sm-12  col-form-label">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                    <span class = "error">* <?php echo $pwdErr;?></span>
                                </div>
                                <label  class="col-sm-12 col-form-label">Dob</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" name="dob" required>
                                    <span class = "error">* <?php echo $dobErr;?>
                                </div>
                            
                        </p>
                        <div class="custom-control custom-radio">
                            <label  class="col-sm-12 col-form-label">Gender</label>
                            <div class="col-sm-12">
                                <input type="radio" class="custom-control-input" name="gender" value="f">Female
                                <input type="radio"  class="custom-control-input" name="gender" value="m">Male
                                <input type="radio" class="custom-control-input" name="gender" value="t">Other
                                <span class = "error">* <?php echo $genderErr;?></span>
                            </div>
                        </div>
                        <div class="postion">
                            <button class="btn btn-success btn-lg" type="submit" name="submit" value="Submit"> SignUp </button>
                        </div>
                    </div>
                </form>
                <p class="text-center ">Already have an account? <a href="signin.php"><u>Sign in here!</a></u></p>
            </div>
        </div>
    </body>
</html>
