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
    
    <link rel="stylesheet" href="assets/css/homepage.css" />
    <title>Shop happily</title>
    
  </head>
  <body>
    
    <div class="container-fluid">
      <?php include "header.php"; ?>
     
      
      <div class="container-fluid bg-light">
          <?php include "nav.php"; ?>
        </div>
          
            <div class="container">
              
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                  <div class="carousel-item active">

                      <img class="d-block w-100" src="assets/image/slide1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="assets/image/slide2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="assets/image/slide3.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="assets/image/slide4.jpg" alt="Third slide">
                  </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
              </div>
              
             

              

          </div>
        


        <!--service container-->
        <div class="container-fluid bg-light">
        
          <div class="container service-container">

              <div class="row">
                  <div class="col bg-primary text-white service "> 
                      <i class="fa fa-refresh" aria-hidden="true"></i>
                      <p> 30 days return</p>

                  </div>
                  <div class="col bg-warning text-white service ">
                      <i class="fa fa-lock" aria-hidden="true"></i>
                      <p>Free Shipping</p>



                  </div>
                  <div class="col bg-danger text-white service">
                      <i class="fa fa-truck" aria-hidden="true"></i>
                      <p>Secure Payments</p>



                  </div>
                  <div class="col bg-info text-white service ">
                      <i class="fa fa-gift" aria-hidden="true"></i>
                      <p>New Payments</p>


                  </div>
                </div>


          </div>
        </div>

        


        <!-- Show profucts --> 
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <form method="POST" action="manage_cart.php">
                <div class="card">
                  <img src="image/bag1.jpg" class="card-img-top" style="height:168.83px;"alt=".."/>
                  <div class="card-body text-center">
                    <h5 class="card-title"> Bag 1</h5>
                    <p class="card-text"> Price : Rs 500</p>
                    <button class="btn btn-info" name="add_to_cart" type="submit"> Add to Cart</button>
                    <input type="hidden" name="item_name" value="Bag 1"/>
                    <input type="hidden" name="item_price" value="500"/>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-lg-3">
              <form method="POST" action="manage_cart.php">
                <div class="card">
                  <img src="image/bag2.jpg" class="card-img-top" style="height:168.83px;" alt=".."/>
                  <div class="card-body text-center">
                    <h5 class="card-title"> Bag 2</h5>
                    <p class="card-text"> Price : Rs 800</p>
                    <button class="btn btn-info" name="add_to_cart" type="submit"> Add to Cart</button>
                    <input type="hidden" name="item_name" value="Bag 2"/>
                    <input type="hidden" name="item_price" value="800"/>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-lg-3">
              <form method="POST" action="manage_cart.php">
                <div class="card">
                  <img src="image/bag3.jpg" class="card-img-top" style="height:168.83px;" alt=".."/>
                  <div class="card-body text-center">
                    <h5 class="card-title"> Bag 3</h5>
                    <p class="card-text"> Price : Rs 450</p>
                    <button class="btn btn-info" name="add_to_cart" type="submit"> Add to Cart</button>
                    <input type="hidden" name="item_name" value="Bag 3"/>
                    <input type="hidden" name="item_price" value="450"/>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-lg-3">
              <form method="POST" action="manage_cart.php">
                <div class="card">
                  <img src="image/bag4.jpg" class="card-img-top" style="height:168.83px;"alt=".."/>
                  <div class="card-body text-center">
                    <h5 class="card-title"> Bag 4</h5>
                    <p class="card-text"> Price : Rs 700</p>
                    <button class="btn btn-info" name="add_to_cart" type="submit"> Add to Cart</button>
                    <input type="hidden" name="item_name" value="Bag 4"/>
                    <input type="hidden" name="item_price" value="700"/>
                  </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      
       
          

    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>