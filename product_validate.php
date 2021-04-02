<?php 
    session_start();
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
                    if($_FILES["image"]["size"] < 990000)
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
            $_SESSION["image"] = "product/" . basename($_FILES["image"]["name"]);
            $image="product/" . basename($_FILES["image"]["name"]);
            
            require_once 'configd.php';

            $conn = new mysqli($host, $username, $dbpassword, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            var_dump('hello');
            $image="product/" . basename($_FILES["image"]["name"]);
            $check="SELECT * from categories WHERE category_name=?";
            $stmt = $conn->prepare($check); 
            $stmt->bind_param("s", $category);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if($row>0)  
            {
                $category_id=$row['id'];

            }
            else{
                $stmt = $conn->prepare("INSERT INTO categories(category_name) VALUES (?)");
                $stmt->bind_param("s",$category);
                $stmt->execute();
                $category_id=$conn->insert_id;
            }
            
            $check="SELECT * from sub_categories WHERE sub_category_name=?";
            $stmt = $conn->prepare($check); 
            $stmt->bind_param("s", $subcategory);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if($row>0)  
            {
                $subcategory_id=$row['id'];

            }
            else{
                $stmt = $conn->prepare("INSERT INTO sub_categories(category_id,sub_category_name) VALUES (?,?)");
                $stmt->bind_param("is",$category_id,$subcategory);
                $subcategory_id=$conn->insert_id;
            }
            var_dump($p_name);
            var_dump($image);
            $stmt = $conn->prepare("INSERT INTO products (product_name,product_image,category_id,sub_category_id) VALUES (?,?,?,?)");
            $stmt->bind_param("ssii",$p_name,$image,$category_id,$subcategory_id);
            $stmt->execute();

            $product_id=$conn->insert_id;
            $id=$_SESSION['user_id'];
            $check="SELECT * from sellers where user_id=?";
            $stmt = $conn->prepare($check); 
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if($row>0)  
            {
                $seller_id=$row['id'];

            }
            $stmt1 = $conn->prepare("INSERT INTO product_sellers (product_id,seller_id,quantity,amount) VALUES (?,?,?,?)");
            $stmt1->bind_param("iidd",$product_id,$seller_id,$quantity, $amount);
            $stmt1->execute();
            $ps_id=$conn->insert_id;
            header('Location: add_product_success.php');
            
        }
    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }  
?>