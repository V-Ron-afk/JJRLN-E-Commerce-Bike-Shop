<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JJRLN Bike Shop</title>
        <!--stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--lightslider-->
        <link href="css/lightslider.css" rel="stylesheet"/>

        <!--icon-->
        <link rel="shortcut icon" href="allpics/images/fav-icon.png"/>
        <!--using-FontAwesome-For-Icons-->
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <!--jQuery CDN-->

   <script src="js/jQueryCDN.js"></script>
   <!--light-slider-js-->

   <script src="js/lightslider.js"></script>
   
    </head>
    <body>
        <form action="" method="POST">
        <!--navigation-->
        <nav>
            

            <!--menu-bar-->
            <div class="navigation">
                <!--logo-->
                <a href="#" class="logo">
                    <img src="allpics/images/logofinal4.png"  />
                </a>
                <!--menu-->
                <ul class="menu">
                    <li><a href="jjlrnbikeshop.php">Home</a></li>
    
                    <li><a href="mtb_shop.php">Mountain Bike</a>
                    <!--sale-lable-->
                    <span class="sale-lable">Sale</span>
                    </li>
    
                    <li><a href="roadbike_shop.php">Road Bike</a></li>
                    <li><a href="bikeparts_shop.php">BIKE PARTS</a></li>
                    <li><a href="shop_shop.php">Shop</a></li>
                </ul>
                <!--right-menu-->
                <div class="right-menu">
                     <!--search-->
                <a href="#" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!--user-->
                 <a href="index.php" class="">
                    <i > 
                      <h4 class='far fa-user  '>Welcome</h4></i>
                </a>
                 <!--cart-icon-->
                    <?php 
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }   
                    ?>
                 <!--cart-icon-->
                 <a href="mycart.php">
                    <i class="fas fa-shopping-cart">
                    <!--number-of-product-in-cart-->
                    <span class="num-cart-product"> <?php  echo $count;  ?> </span>
                </i>
                </a>
                </div>
            </div>
        </nav>
         <!--search-bar-->
    <div class="search-bar">
        <!--search-input-->
        <div class="search-input">
            <!--input-->
            <input type="text" placeholder="Search For Product"/>
            <!--cancel-btn-->
            <a href="#" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
        </div>

         <!--login-and-sign-up-form-->
    <div class="form">
        <!--login-->
        <div class="login-form">
            <!--cancelbtn-->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <b>Log In</b>
            <!--inputs-->
            <form action = "Login.php" method="POST">
                <input type="email" placeholder="Mobile number or email address" name="email"required>
                <input type="password" placeholder="Password" name="password"required>
                <!--submit-btn-->
                <input type="submit" value="Log In">
            </form>
            <div class="form-btns">
             <!--forget-ans-sign-up-btn-->
             <a href="#" class="forget">Forget Your Password</a>
             <a href="#" class="sign-up-btn">Create Account</a>
            </div>
     </div>


     <!--Sign-up-->
     <div class="sign-up-form">
        <!--cancelbtn-->
        <a href="#" class="form-cancel">
            <i class="fas fa-times"></i>
        </a>
        <!--heading-->
        <b>Sign Up</b>
        <!--inputs-->
        <form action="signup.php" method="POST">
            <input type="text" placeholder="First Name" name="fname"required>
            <input type="text" placeholder="Last Name" name="lname"required>
            <input type="text" placeholder="Full Name" name="fullname"required>
            <input type="email" placeholder="Mobile number or email address" name="email"required>
            <input type="password" placeholder="New Password" name="password"required>
            <!--submit-btn-->
            <input type="submit" value="Sign Up">
        </form>
        <div class="form-btns">
         <!--forget-ans-sign-up-btn-->
         <a href="#" class="forget">Already Have Account?</a> 
        </div>
 </div>
    </div>

<div class="container">
   <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Shopping Cart </h1>
        </div>
        <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>

  <tbody class="text-center">
     <?php
     $total=0;
        if (isset($_SESSION['cart'])) 
        {
            foreach ($_SESSION['cart'] as $key => $value) 
            {
                 $sr=$key+1;
                $total=$total+$value['Price'];
                echo "
                    <tr>
                        <td>$sr</td>
                        <td> $value[Item_Name]</td>
                        <td> $value[Price]</td>
                        <td><input type= 'number' value='$value[Quantity]' min='1' max='10'</td>
                        <td>
                            <form action='manage_cart.php' method='POST'>
                                <button name='Remove_Item' class= ' btn btn-sm btn-outline-danger' >REMOVE </button>
                                <input type= 'hidden' name='Item_Name' value='$value[Item_Name]'>
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
   <div class="col-lg-4 my-5">
    <div class="border bg-light p-4">
        <h4>Total Price:</h4>
        <h5 class="text-right">₱ <?php echo $total ?>   </h5>
        <br>
        <form>

            <div class="form-check  ">

                    <button type="button" class="btn btn-danger btn-lg my-5 " 
                    data-toggle="modal" data-target="#myModal">CHECK OUT</button>
  <!-- Modal --></div>
                 <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-xl">
      <!-- Modal content-->
                 <div class="modal-content">
                 <div class="modal-header ">
                     <h4 class="modal-title text-center" class="mx-auto" style="width: 900px;" >CHECK OUT FORM</h4> 
                <button type="button" class="close float-lg-left" data-dismiss="modal">&times;</button>
                
                 </div>
                 <div class="modal-body">
                <div class="col-75">
    <div class="container2">
      <form>
      
        <div class="form-group row">
          <div class="col-12">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i>                    </i></label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Rizal">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="3343 Zamora St.">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="CALAMBA">

            <div class="row1">
              <div class="col-12">
                <label for="state">Province</label>
                <input type="text" id="state" name="state" placeholder="Laguna">
              </div>
              <div class="col-12">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="4009">
              </div>
            </div>
          </div>

          <div class="col-12">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-paypal" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-credit-card" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-12">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-12">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
           
        </div>
       <div class="modal-footer bg-light ">
                     <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash on Delivery
                        </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                       ATM
                        </label>
                    </div>
            </div>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
                     <?php 
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }   
                    ?>
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b> <?php  echo $count;  ?></b></span></h4>
 
        <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>

  <tbody class="text-center">
     <?php
     $total=0;
        if (isset($_SESSION['cart'])) 
        {
            foreach ($_SESSION['cart'] as $key => $value) 
            {
                $sr=$key+1;
                $total=$total+$value['Price'];
                echo "
                    <tr>
                        <td>$sr</td>
                        <td> $value[Item_Name]</td>
                        <td> $value[Price]</td>
                        <td><input type= 'number' value='$value[Quantity]' min='1' max='10'</td>
                        <td>
                            <form action='manage_cart.php' method='POST'>
                                
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
</div>

       <h4>Total:</h4>
        <h5 class="text-right">₱ <?php echo $total ?>  </h5>
    </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-5 "></div>
                  
                 <div class="modal-footer  ">
                   
               <a href="porder.php" class="">
             <button type="button"  class="btn btn-danger  border rounded " >PLACE ORDER</button>
                </a>
          
            </div>
            </div>
            </div>
             </div>
             </div>
            </div>        
        </form>
    </div>
   </div>
</div>
</div>

</form>
<footer class="footer">
     <div class="container">
        <div class="row">
            <div class="footer-col">
                <a href="#" class="logo1">
                    <img src="allpics/images/logofinal1.png"/>
                </a>

                <h2>We are the world class Bike providers with the highest quality of Bike services.</h2>
              


            </div>
            <div class="footer-col">
                <h4>&nbsp&nbsp&nbspAccepted Payments</h4>
                <ul class ="cardimg">
                    <img src="allpics/card/mastercard1.png " height="20%" width="30%" />
                    <br><img src="allpics/card/visa.jpg" height="20" width="30%"/>
                    <br><img src="allpics/card/gcash1.png" height="20%" width="30%"/>
                    <br><img src="allpics/card/paypal.png" height="20%" width="30%"/>
                     <br><img src="allpics/card/maestro1.png" height="20%" width="30%"/>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our Links</h4>
                <ul>
                    <li><a href="jjlrnbikeshop.php">HOME</a></li>
                    <li><a href="mtb_shop.php">MOUNTAIN BIKE</a></li>
                    <li><a href="roadbike_shop.php">ROAD BIKE</a></li>
                    <li><a href="bikeparts_shop.php">BIKE PARTS</a></li>
                    <li><a href="shop_shop.php">SHOP</a></li>
                </ul>
            </div>
            <div class="footer-col">

                <ul class ="iconimg">
                            
                     <li class="litext1 text-white" > <img src="allpics/icon/time.png" width="15%">    OPENING TIME <br>&nbsp&nbsp&nbsp&nbsp&nbsp 8:00am - 8:00pm</li>

                    <br><li class="litext1 text-white"> <img src="allpics/icon/call.png" width="15%">  Contact Us <br> &nbsp&nbsp&nbsp&nbsp +63978001916</li>
                </ul>


                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

           
        </div>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray;">
        <h6 class="text-white text-center"> © JJRLN BIKESHOP 2021. All Rights Reserved. </h6>
     </div>
 
        </form>
       </body>
       <script>
// When the user clicks on div, open the popup
    <!--jQuery CDN-->
    <script src="js/lightslider.js"></script>
    <script src="js/jQueryCDN.js"></script>
    <script src="js/jquery.js"></script>
    <!--script-->
    <script type="text/javascript">
    </script>
</html>