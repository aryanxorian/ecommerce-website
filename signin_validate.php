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
			$query="select status from sellers where user_id=?";
			$statement=$conn->prepare($query);
			$statement->bind_param("i",$row['id']);
			$statement->execute();
			$result2=$statement->get_result();
			$row2=$result2->fetch_assoc();
			
			if($row2['status']===1)
			{
				$_SESSION['user_id']=$row['id'];
				
			}
	        header('Location: index.php');
	        exit();
	    }  
	    else  
	    {  
	    	echo "<script>alert('Email or password is incorrect!')</script>";  
	    }  
	}  
?>