<!DOCTYPE HTML>  
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css"> 
    	body{
    	    font-family: cursive;
    		}
        .login-form {
            width: 60%;
            margin: 0 auto;
            padding: 100px 0 30px;    
        }
        .para{
            padding: 10px;
        }
        .error {
            color: #FF0000;
        }
        .box{
            background-color: #ececec;
            padding:4%;
            color:#7a7a7a;
            font-weight: 10px;
            font-family: cursive;
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
            <div class="login-form">
                <h2 class="h"><u> PRODUCT STOCK DETAILS </h2></u>
                <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                    <div class="form-group box">
                        <p>
                            <div class="row">
                              <label  class="col-sm-2 col-form-label">Product Image</label>
                              <div class="col-sm-6">
                                <input type="file" name="product_image">
                                <span class="error">*<?php echo $imageErr;?></span>
                              </div>
                            </div>
                        </p>
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
                </form>
            </div>
        </div>
    </body>
</html>