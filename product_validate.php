<?php 
    session_start();
    require_once('configd.php');
    $nameErr = $imageErr = $amountErr = $quantityErr =NULL;
    $image=$p_name=$amount=$quantity=$seller_id="";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $_SESSION["p_name"] = $p_name = test_input($_POST["p_name"]);
        $_SESSION["amount"] = $amount = test_input($_POST["amount"]);
        $_SESSION["quantity"] = $quantity = test_input($_POST["quantity"]);
        $category=test_input($_POST["category"]);
        $subcategory=test_input($_POST["sub-category"]);
        $image =test_input($_POST["image"]);
        if (empty($p_name)) 
        {
            $nameErr = "Product Name is required";
        }
        if (empty($amount))
        {
            $amountErr = "Amount is required";
        }
        
        if(empty($quantity))
        {
            $pwdErr="Enter 0 if Out Of Stock.";
        }
        if(!empty($_FILES["image"]["name"]))
        {
            
            if($_FILES["image"]["error"] == 0)
            {
                $allowed_types = array("image/jpeg", "image/jpg", "image/png", "image/gif");
                if((in_array($_FILES["image"]["type"], $allowed_types)))
                {
                    if($_FILES["image"]["size"] < 9900000)
                    {
                        $uploaded = copy($_FILES["image"]["tmp_name"],"product/" .$_FILES["image"]["name"]);
                        if(!$uploaded)
                        {
                            $imageErr="File could not be uploaded";
                        }   
                    }
                    else
                    {
                        $imageErr="File should be less than 10KB " . $_FILES["image"]["size"];
                    }
                }   
                else
                {
                    $imageErr="Please upload JPG or PNG files";
                }
            }
            else
            {
                $imageErr="There are some errors with the file";
            }
        }
        else
        {
            $imageErr="Please browse a file to upload";
        }
        
        if (!$nameERR && !$imageErr && !$amountErr && !$quantityErr ) {
            //$_SESSION["image"] = "product/" . basename($_FILES["image"]["name"]);
            $product_image=htmlspecialchars(basename($_FILES["image"]["name"]));
            
            $stmt = $conn->prepare("select id from categories where category_name=?");
            $stmt->bind_param("s",$category);
            if($stmt->execute())
            {
                $result=$stmt->get_result();
                $row=$result->fetch_assoc();
            
            
                $stmt2 = $conn->prepare("select id from sub_categories where sub_category_name=? and category_id=?");
                $stmt2->bind_param("si",$subcategory,$row['id']);
                if($stmt2->execute())
                {
                    $result2=$stmt2->get_result();
                    $row2=$result2->fetch_assoc();
                
            
            
                    $stmt3 = $conn->prepare("INSERT INTO products (product_name,product_image,category_id,sub_category_id) VALUES (?,?,?,?)");
                    $stmt3->bind_param("ssii",$p_name,$product_image,$category_id,$subcategory_id);
                    $category_id=$row['id'];
                    $subcategory_id=$row2['id'];
                    if($stmt3->execute())
                    {
                        
                        $product_id=$conn->insert_id;
                        $seller_id=$_SESSION['user_id'];
                        $stmt4 = $conn->prepare("INSERT INTO product_sellers (product_id,seller_id,quantity,amount) VALUES (?,?,?,?)");
                        $stmt4->bind_param("iiid",$product_id,$seller_id,$quantity, $amount);
                        if($stmt4->execute())
                        {
                            header('Location: add_product_success.php');
                        }
                    }
                }
            }
        }
    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }  
?>