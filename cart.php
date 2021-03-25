<?php
session_start();
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

    <link rel="stylesheet" href="css/style.css" />
    <title>Shop happily</title>

    </head>

    <body>
    
        <div class="container-fluid">
           <?php include "header.php";?>
            <!-- cartbody starts -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center border rounded bg-light my-5">
                        <h1>  MY CART</h1>
                    </div>
                    <div class="col-lg-9">
                        <table class="table">
                            <thead class="text-center"> 
                                <tr>
                                <th scope="col">Serial No.</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                    $total=0;
                                    if(isset($_SESSION['cart']))
                                        {
                                            foreach($_SESSION['cart'] as $key =>$value)
                                                {   
                                                    $total+=$value['item_price'];
                                                    echo"
                                                        <tr>
                                                            <td> </td>
                                                            <td>$value[item_name]</td>
                                                            <td> $value[item_price]</td>
                                                            <td><input type='number' value='$value[quantity]' min='1' max='10' class='text-center' > </td>

                                                            <td> 
                                                                <form action='manage_cart.php' method='POST'>
                                                                    <button  name='remove_item' class='btn btn-sm btn-outline-danger'> Remove</button>
                                                                    <input type='hidden' name='item_name' value='$value[item_name]' >
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    ";
                                                }

                                        }
                                ?>
                               
                                
                            </tbody>
                        </table>

                    </div>
                    <div class="col-lg-3">
                        <div class="border bg-light rounded p-4">
                            <h4> Total:</h3>
                            <h6 class="text-right"> <?php echo $total;?></h6> 


                            <form class="mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="purchase_type" id="purchase_type" value="cash on delivery" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    Cash on delivery
                                    </label>
                                    
                                    
                                </div>
                                <br>
                                <button class="btn btn-primary btn-block"> Buy Now </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- cart body ends -->
        </div> 
    </body>
</html>