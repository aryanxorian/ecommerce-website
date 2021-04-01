  <!--upper nav bar -->

<div class="container-fluid bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              
              </button>
            
              <div class="collapse navbar-collapse uppernav" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="profile.php"> <i class="fa  fa-user"> </i>My Account </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa  fa-heart"> </i>Wishlist</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cart.php"> <i class="fa  fa-user"></i>My Cart</a>
                  </li>
                  <?php if(isset($_SESSION['username']))
                  { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="seller.php"> <i class="fa  fa-user"></i>Become A seller</a>
                  </li>
                  <?php }?>

                  
                  <li class="nav-item">
                    <a class="nav-link" href="signin.php"> <i class="fa  fa-user"></i>
                    <?php
                    if(!isset($_SESSION['username']))
                    {
                    echo "Login";
                    }
                    else
                    {
                      echo $_SESSION['name'].'(<span><a href="logout.php"> Log out</a> </span>)';
                    }
                  ?>
                  
                </a>
                  </li>
                
                  
                 
                </ul>
                <span class="navbar-text">
                  <div class="collapse navbar-collapse uppernav" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                      <!--
                      <li class="nav-item ">
                        <a class="nav-link " href="#" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                          Currency <select>
                            <option>USD</option>
                            <option>Rupees</option>
                            <option>Yan</option>
                          </select>
                        </a>
                        
                          
                       
                          
                      </li>
                      
                      <li class="nav-item ">
                        <a class="nav-link" href="#" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                          Language <select>
                            <option>English</option>
                            <option>Hindi</option>
                            <option>Bengali</option>
                          </select>
                        </a>
                        
                        
                          
                      </li>
                      -->
                    </ul>
                    
                  </div>
                  
                </span>
              </div>
            </nav>
        </div>
    </div>
  
      <!--logo section-->
      <div class="container">
        <nav class="navbar navbar-light  justify-content-between">

            <a class="navbar-brand" href="index.php"><img src="assets/image/logo.png"style="width:250px;height:60px;"/></a>
          
            <?php 
            $count=0;
            if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);

                }
            ?>
            <a  href="cart.php"class="btn btn-outline-success my-2 my-sm-0" >Cart( <?php echo $count; ?>)<i class="fa fa-cart-plus" style="padding:0px;"></i></a>
          
        </nav>
      </div>
    