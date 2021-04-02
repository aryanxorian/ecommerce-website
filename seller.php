<?php
    require_once 'configd.php';
	session_start();
    if(isset($_POST['authenticate']))  
	{  
	    $user_email=$_POST['username'];
	    $user_pass=$_POST['password'];  
	  
	    $check_user="SELECT * from users WHERE email=? AND password=?";  
	  	$stmt = $conn->prepare($check_user); 
		$stmt->bind_param("ss", $user_email,$user_pass);
		$stmt->execute();
		$result = $stmt->get_result();  
	  	$row= $result->fetch_assoc();
	    if($row>0)  
	    {  
	    	$query="insert into sellers(user_id,status) values(?,?)";
            $ps= $conn->prepare($query);
            $ps->bind_param("ii",$id,$status);
            $id=$row['id'];
            $status=1;
            $ps->execute();
        
            header('Location: confirm_seller.php');
	        exit();
	    }  
	    else  
	    {  
	    	echo "<script>alert('Email or password is incorrect!')</script>";  
	    }  
	}  
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/homepage.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Shop happily</title>

    </head>
    <body>
    
        <div class="container-fluid">

            <?php include "header.php"; ?>
            <div class="container-fluid bg-light">
                <?php include "nav.php"; ?>
            </div>
        </div>
        <div class="container property">
            <div class="row">
                <div class="col-4 align-self-start"></div>
                <div class="col-4 align-self-center">
                    <form action="" method="post">
                      
                        <h4>Confirm Username and Password to become a seller</h4>
                        <div class="form-group">
                            <input type="email" name="username"class="form-control" placeholder="email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" name ="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            
                            <a href="#" class="forgot-link">Forgot Password?</a>
                        </div> 
                        <input type="submit" class="btn btn-success btn-block btn-lg"  name="authenticate" value="Authenticate">              
                    </form>			
                    
                </div>
                <div class="col-4 align-self-end"></div>
                
            </div>

        </div>
            
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>