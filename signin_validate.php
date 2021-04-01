<?php
	require_once 'configd.php';
	session_start();
    if(isset($_POST['login']))  
	{  
	    $user_email=$_POST['username'];
	    $user_pass=$_POST['password'];  
	  
	    $check_user="SELECT password from users WHERE email=?";  
	  	$stmt = $conn->prepare($check_user); 
		$stmt->bind_param("s", $user_email);
		$stmt->execute();
		$result = $stmt->get_result();  
	  	$row= $result->fetch_assoc();
	    if(password_verify($user_pass,$row["password"]))  
	    {  
	    	$_SESSION['username']=$user_email;
			$_SESSION['name']=$row['name'];
	        header('Location: index.php');
	        exit();
	    }  
	    else  
	    {  
	    	echo "<script>alert('Email or password is incorrect!')</script>";  
	    }  
	}  
?>