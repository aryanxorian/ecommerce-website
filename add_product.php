<?php
<<<<<<< HEAD
session_start();
=======
    session_start();
    include_once("product_validate.php");
>>>>>>> 12f8c552063b887c1b8337cfff0c8a197dc6f779
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
        
        
        
        <title>Shop happily</title>
        <style>
        
        .login-form
        {
            width: 60%;
            margin: 0 auto;
            padding: 100px 0 30px;    
        }
        .para
        {
            padding: 10px;
        }
        .error
        {
            color: #FF0000;
        }
        .box{
            background-color: white;
            
            color:black;
            font-weight: 10px;
            display:none;
            
        }
        .h{
            text-align: center;
        }
        .postion{
            text-align: center;
        }

        </style>

    </head>
    <body>
    
        <div class="container-fluid">

            <?php include "header.php"; ?>
            <div class="container-fluid bg-light">
                <?php include "nav.php"; ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="w-50 mx-auto">
<<<<<<< HEAD
                    <form name="form1" id="form1" method="post" action="product_validate.php">
=======
                    <form name="form1" id="form1" enctype="multipart/form-data" method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
>>>>>>> 12f8c552063b887c1b8337cfff0c8a197dc6f779
                        <div class="col-sm-12 m-2">
                            Gender: <select name="gender" id="gender">
                                <option value="" selected="selected">Select subject</option>
                                </select>
                                <span class="error">*</span>
                        </div>
                        <div class="col-sm-12 m-2">
                            Category: <select name="category" id="category">
                                <option value="" selected="selected">Please select subject first</option>
                            </select>
                            <span class="error">*</span>
                        </div>
                        <div class="col-sm-12 m-2">                        
                            Sub-Category: <select name="sub-category" id="sub-category" onchange="fun()">
                                <option value="" selected="selected">Please select topic first</option>
                            </select>
                            <span class="error">*</span>
                        </div>
                        <div class="form-group box" id="box">   
                            <div class="row">
                                <label  class="col-sm-2 col-form-label">Product Image</label>
                                <div class="col-sm-6">
                                <input type="file" name="image">
                                <span class="error">*<?php echo $imageErr;?></span>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label"> Product Name</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="p_name" placeholder="Enter Product Name">
                                  <span class = "error">* <?php echo $nameErr;?></span>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-6">
                                <input type="number" class="form-control" name="quantity" placeholder="Enter Quantity">
                                <span class = "error">* <?php echo $quantityErr;?></span>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label">Amount</label>
                                <div class="col-sm-6">
                                <input type="number" class="form-control" name="amount" placeholder="Enter Amount">
                                <span class = "error">*<?php echo $amountErr;?></span>
                                </div>
                            </div>
                    </div>
                    <input type="submit" class="btn btn-success"id="submit" name="submit" value="Submit">  
                    </form>
                    
                </div>
            </div>

        </div>
            
    <script>
        
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <Script src="assets/js/newscript.js"> </script>
</body>
</html>