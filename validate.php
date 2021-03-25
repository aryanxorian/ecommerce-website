<?php
	session_start();
    $nameErr = $emailErr = $genderErr = $pwdErr = "";
    $name = $email = $gender = $passwordd = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	
        $_SESSION["name"] = $name = test_input($_POST["name"]);
        $_SESSION["email"] = $email = test_input($_POST["email"]);
        $_SESSION["gender"] = $gender = test_input($_POST["gender"]);
        $_SESSION["password"] = $password = test_input($_POST["password"]);
        
    
        if (empty($name)) {
            $nameErr = "Name is required";
        }

        if (empty($email)) {
         $emailErr = "Email is required";
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
            }
        }
            
        if (strlen($password) <= 8) {
            $pwdErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $pwdErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $pwdErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $pwdErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $pwdErr = "";
        }

        if (empty($gender)) {
            $genderErr = "Gender is required";
        }

	    if (!$nameERR && !$genderErr && !$emailErr && !$pwdErr) {
	            header('Location: signin.php');
	            exit();
	    }
	}

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>