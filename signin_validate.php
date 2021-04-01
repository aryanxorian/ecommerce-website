<?php
	require_once 'configd.php';
	session_start();
    if(isset($_POST['login']))  
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