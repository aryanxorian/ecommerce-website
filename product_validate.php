<?php
	session_start();
    $nameErr = $imageErr = $amountErr = $quantityErr =NULL;
    $product_image=$p_name=$amount=$quantity=""

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	
    	
        $_SESSION["p_name"] = $p_name = test_input($_POST["p_name"]);
        $_SESSION["amount"] = $amount = test_input($_POST["amount"]);
        $_SESSION["quantity"] = $quantity = test_input($_POST["quantity"]);
        $product_image = test_input($_POST["product_image"]);
        
        
        if (empty($p_name)) {
            $nameErr = "Product Name is required";
        }
        if (empty($amount)) {
            $amountErr = "Amount is required";
        }
        
        if(empty($quantity)){
            $pwdErr="Enter 0 if Out Of Stock.";
        }
        if(!empty($_FILES["product_image"]["name"]))
        {
            if($_FILES["product_image"]["error"] == 0)
            {
                $allowed_types = array("image/jpeg", "image/jpg", "image/png", "image/gif");
                if((in_array($_FILES["product_image"]["type"], $allowed_types)))
                {
                    if($_FILES["product_image"]["size"] < 990000)
                    {
                        $uploaded = copy($_FILES["product_image"]["tmp_name"],"product/" .$_FILES["product_image"]["name"]);
                        if(!$uploaded)
                        {
                        
                            $imageErr="File could not be uploaded";
                        }   
                    }
                    else
                    {
                        $imageErr="File should be less than 10KB " . $_FILES["product_image"]["size"];
                    }
                }   
                else
                {
                    $uploadErr="Please upload JPG or PNG files";
                }
            }
            else
            {
                $uploadErr="There are some errors with the file";
            }
        }
        else
        {
            $uploadErr="Please browse a file to upload";
        }
	    if (!$nameERR && !$imageErr && !$amountErr && !$quantityErr ) {
            $_SESSION["image"] = "product/" . basename($_FILES["product_image"]["name"]);
            $conn =mysqli_connect('localhost', 'nikitab', 'mindfire', 'E-commerce');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $image="product/" . basename($_FILES["image"]["name"]);
            
            
            mysqli_close($conn);
	    }
	}

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>