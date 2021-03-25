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
	        // header('Location: signin.php');
	        // exit(); 
                try {
                    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $dbpassword);
                    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected to $dbname at $host successfully.";
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }

                $data = array($name,$email,$password,$dob,$gender);
                
                $sql = "INSERT INTO users(name,email,password,dob,gender) VALUES(?, ?, ?, ?, ?);";

                $q = $conn->prepare($sql);

                $q->execute($data);

	    }
	}
    // session_destroy();

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>