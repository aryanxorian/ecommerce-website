<?php
    require_once 'configd.php';
	session_start();
    $nameErr = $emailErr = $genderErr = $pwdErr = "";
    $name = $email = $gender = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	
        $_SESSION["name"] = $name = test_input($_POST["name"]);
        $_SESSION["email"] = $email = test_input($_POST["email"]);
        $_SESSION["password"] = $password = test_input($_POST["password"]);
        $_SESSION["dob"] = $dob = test_input($_POST["dob"]);
        $_SESSION["gender"] = $gender = test_input($_POST["gender"]);
        
    
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
            $conn = new mysqli($host, $username, $dbpassword, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $check_email_query="SELECT * from users WHERE email=?";
            $stmt = $conn->prepare($check_email_query); 
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();  
            if($row>0){
                $emailErr="Email already exists. You cannot register with duplicate email.";
            }
            else{
                $stmt = $conn->prepare("INSERT INTO users (name, email, password, dob, gender) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $name, $email, $password, $dob, $gender);
                $stmt->execute();
            }

	    }
	}
    session_destroy();

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>