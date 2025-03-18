<?php 
session_start();

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
        <link rel="shortcut icon" href="images/fav-icon.png"/>
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
                <a href="jjlrnbikeshop.php" class="logo">
                    <img src="allpics/images/logofinal4.png"  />
                </a>
                <!--menu-->
                <ul class="menu">
                    <li><a href="jjlrnbikeshop.php">Home</a></li>
    
                    <li><a href="">Mountain Bike</a>
                    <!--sale-lable-->
                    <span class="sale-lable">Sale</span>
                    </li>
    
                    <li><a href="roadbike_shop.php">Road Bike</a></li>
                    <li><a href="bikeparts_shop.php">Bike Parts</a></li>
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
        <div class="col-lg-12 text-center border rounded bg-light my-2">
            <h1>Mountain Bike </h1>
        </div>
    </div>
</div>


<section class="new-arrival col-lg-12">
            <!--heading-->
           
                <b class="text-center border rounded h2 bg-danger text-light">SALE MOUNTAIN BIKES PRODUCTS</b>
                 <div class="arrival-heading">
                <p>We Provide You Quality & Affordable Design Product Of Bikes And Bike Parts</p>
            </div>
            <!--product-container-->
            <div class="container-product">
              <div class="row">
                 <!--product-box-1-->
                <button class="product-box " data-toggle="modal" data-target="#myModal">
                    
                    <div class="product-img">
                      <div class="ribbon"><span>SALE 50%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/btwinMTB1.jpg " >
                </div>
                <!--details-->
                <div class="product-details ">
                    <a href="#" class="p-name">BTWIN MTB</a>
                    <span class="p-price"> <s class="text-danger text-left h6">₱25,000</s> ₱12,500</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >BTWIN MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <div class="ribbon"><span>SALE 50%</span></div>
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/btwinMTB1.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
              <br>  
            <a href="#" class="p-name">BTWIN MTB</a>
            <br>
           <span class="p-price"> <s class="text-danger text-left h6">₱25,000</s> ₱12,500</span>


        </div>
        <div class="modal-footer">
           <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="BTWIN MTB">
            <input type="hidden" name="Price" value="12500">

        </div>  
      </div>
    </div>
  </div>
  </form>
                 <!--product-box-2-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal2">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 50%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/ExpeditionMTB1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Expedition MTB</a>
                  <span class="p-price"> <s class="text-danger text-left h6">₱20,000</s> ₱10,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Expedition MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 50%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/ExpeditionMTB1.jpg" alt="Chania" 
                width="100%" height="100%"   class="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Expedition MTB</a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱20,000</s> ₱10,000</span>

        </div>
        <div class="modal-footer">
           <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Expedition MTB">
            <input type="hidden" name="Price" value="10000">
         
        </div>  
      </div>
    </div>
  </div>
   </form>
                  <!--product-box-3-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal3">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 50%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/foxterelbrus1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Foxter Elbrus MTB</a>
                    <span class="p-price"> <s class="text-danger text-left h6">₱30,000</s> ₱15,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Foxter Elbrus MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 50%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/foxterelbrus1.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Foxter Elbrus MTB</a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱30,000</s> ₱15,000</span>

        </div>
        <div class="modal-footer">
        <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Foxter Elbrus MTB">
            <input type="hidden" name="Price" value="15000">

        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-4-->
                  <button class="product-box " data-toggle="modal" data-target="#myModal4">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 50%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/giantRinconMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                    <a href="#" class="p-name">Giant Rincon MTB</a>
                    <span class="p-price"> <s class="text-danger text-left h6">₱24,000</s> ₱12,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Giant Rincon MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 50%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/giantRinconMTB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Giant Rincon MTB</a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱24,000</s> ₱12,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Giant Rincon MTB">
            <input type="hidden" name="Price" value="12000">

        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-5-->
                <button class="product-box " data-toggle="modal" data-target="#myModal5">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 50%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/MINGUMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">MINGU MTB</a>
                    <span class="p-price"> <s class="text-danger text-left h6">₱20,000</s> ₱10,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >MINGU MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 50%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/MINGUMTB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> MINGU MTB</a>
           <br> <span class="p-price"> <s class="text-danger text-left h6">₱20,000</s> ₱10,000</span>


        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="MINGU MTB">
            <input type="hidden" name="Price" value="10000">
        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-6-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal6">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 75%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/RapiditeBlack.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Rapidite Black MTB</a>
                   <span class="p-price"> <s class="text-danger text-left h6">₱22,000</s> ₱16,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal6">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Rapidite Black</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 75%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/RapiditeBlack.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name"> Rapidite Black MTB</a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱22,000</s> ₱16,500</span>

        </div>
        <div class="modal-footer">
        <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Rapidite Black MTB">
            <input type="hidden" name="Price" value="16500">
        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-7-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal7">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 75%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/Trekremedy.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">TREK Remedy MTB</a>
                   <span class="p-price"> <s class="text-danger text-left h6">₱30,000</s> ₱22,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal7">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TREK Remedy MTB</h4>
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 75%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/Trekremedy.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name ">TREK Remedy MTB </a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱30,000</s> ₱22,500</span>

        </div>
        <div class="modal-footer">
        <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TREK Remedy MTB">
            <input type="hidden" name="Price" value="22500">
        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-8-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal8">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 75%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/TREKXCALIBER9.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">TREK CALIBER 9 MTB</a>
                    <span class="p-price"> <s class="text-danger text-left h6">₱34,000</s> ₱25,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal8">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TREK CALIBER 9 MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 75%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/TREKXCALIBER9.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> TREK CALIBER 9 MTB </a>
           <br> <span class="p-price"> <s class="text-danger text-left h6">₱34,000</s> ₱25,500</span>

        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TREK CALIBER 9 MTB">
            <input type="hidden" name="Price" value="25500">
        </div>  
      </div>
    </div>
  </div>
</form>
                  <!--product-box-9-->
                  <button class="product-box " data-toggle="modal" data-target="#myModal9">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 75%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/trinxMTB1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Trinx Mtb</a>
                    <span class="p-price"> <s class="text-danger text-left h6">₱26,000</s> ₱19,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal9">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Trinx Mtb</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 75%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/trinxMTB1.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Trinx Mtb </a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱26,000</s> ₱19,500</span>

        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Trinx Mtb ">
            <input type="hidden" name="Price" value="19500">
        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-10-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal10">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon"><span>SALE 75%</span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/mtbpics/uplandMtb.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Upland MTB</a>
                   <span class="p-price"> <s class="text-danger text-left h6">₱20,000</s> ₱15,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal10">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Upland MTB</h4> 
           <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon"><span>SALE 75%</span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/mtbpics/uplandMtb.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Upland MTB </a>
           <br><span class="p-price"> <s class="text-danger text-left h6">₱20,000</s> ₱15,000</span>

        </div>
        <div class="modal-footer">
        <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Upland MTB ">
            <input type="hidden" name="Price" value="15000">

        </div>  
      </div>
    </div>
  </div>
</form>

</div>
</section>

<section class="new-arrival col-lg-12">
            <!--heading-->
           
                <b class="text-center border rounded h3 bg-dark text-light">MORE MOUNTAIN BIKES PRODUCTS</b>
                 <div class="arrival-heading">
                <p>We Provide You Quality & Affordable Design Product Of Bikes And Bike Parts</p>
            </div>
            <!--product-container-->
            <div class="container-product">
              <div class="row">
                 <!--product-box-1-->
                <button class="product-box " data-toggle="modal" data-target="#myModal20">
                    
                    <div class="product-img">
                      <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/images/TOSEEK BRANDON 2021.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">TOSEEK BRANDON 2021</a>
                    <span class="p-price">₱12,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal20">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TOSEEK BRANDON 2021</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <div class="ribbon2"><span>NEW</span></div>
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/images/TOSEEK BRANDON 2021.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> TOSEEK BRANDON 2021</a>
           <br><span class="p-price ">₱12,000</span>


        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TOSEEK BRANDON 2021">
            <input type="hidden" name="Price" value="12000">

        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal11">
                    
                    <div class="product-img">
                      <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/parts/herohighball.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">Santa Cruz MTB Bike HB</a>
                    <span class="p-price">₱25,500</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal11">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
           <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Santa Cruz MTB Bike HB</h4> 
            <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <div class="ribbon2"><span>NEW</span></div>
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/parts/herohighball.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name ">Santa Cruz MTB Bike HB </a>
           <br><span class="p-price ">₱25,500</span>


        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Santa Cruz MTB Bike HB ">
            <input type="hidden" name="Price" value="25500">
        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal12">
                    
                    <div class="product-img">
                      <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                     <img src="allpics/parts/Marlin.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">TREK MTB Bike MARLIN 5</a>
                    <span class="p-price">₱30,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal12">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TREK MTB Bike MARLIN 5</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <div class="ribbon2"><span>NEW</span></div>
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/parts/Marlin.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name ">TREK MTB Bike MARLIN 5 </a>
           <br><span class="p-price ">₱30,000</span>


        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TREK MTB Bike MARLIN 5 ">
            <input type="hidden" name="Price" value="30000">

        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal13">
                    
                    <div class="product-img">
                 
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/01CarreraMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">Carrera MTB</a>
                    <span class="p-price">₱17,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal13">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Carrera MTB</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/01CarreraMTB.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> Carrera MTB</a>
           <br><span class="p-price ">₱17,000</span>


        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Carrera MTB">
            <input type="hidden" name="Price" value="17000">

        
        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal14">
                    
                    <div class="product-img">
                     
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/02ALDIMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name"> ALDI MTB</a>
                    <span class="p-price">₱12,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal14">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >ALDI MTB</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/02ALDIMTB.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> ALDI MTB</a>
           <br><span class="p-price ">₱15,000</span>


        </div>
        <div class="modal-footer">
       <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="ALDI MTB">
            <input type="hidden" name="Price" value="15000">

        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal15">
                    
                    <div class="product-img">
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/03TREKOMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">TREK O MTB</a>
                    <span class="p-price">₱20,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal15">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TREK O MTB</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/03TREKOMTB.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> TREK O MTB</a>
           <br><span class="p-price ">₱20,000</span>


        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TREK O MTB">
            <input type="hidden" name="Price" value="20000">

        
        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal16">
                    
                    <div class="product-img">
                     
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/04raleighsoloMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name"> Raleigh Solo MTB</a>
                    <span class="p-price">₱15,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal16">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Raleigh Solo MTB</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
        
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/04raleighsoloMTB.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> Raleigh Solo MTB</a>
           <br><span class="p-price ">₱15,000</span>


        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Raleigh Solo MTB">
            <input type="hidden" name="Price" value="15000">
        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal17">
                    
                    <div class="product-img">
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/05MarinePineMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name"> Marine Pine MTB</a>
                    <span class="p-price">₱25,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal17">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" > Marine Pine MTB</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/05MarinePineMTB.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> Marine Pine MTB</a>
           <br><span class="p-price ">₱25,000</span>


        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Marine Pine MTB">
            <input type="hidden" name="Price" value="25000">
        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal18">
                    
                    <div class="product-img">
                    
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/06commencalpremier.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">Commencal Premier MTB</a>
                    <span class="p-price">₱22,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal18">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Commencal Premier MTB</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
          
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/06commencalpremier.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> Commencal Premier MTB</a>
           <br><span class="p-price ">₱22,000</span>


        </div>
        <div class="modal-footer">
       <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Commencal Premier MTB">
            <input type="hidden" name="Price" value="22000">
        </div>  
      </div>
    </div>
  </div>
  </form>

   <button class="product-box " data-toggle="modal" data-target="#myModal19">
                    
                    <div class="product-img">
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">

                        <i class="fas fa-shopping-cart"></i>

                    </a>

                    <img src="allpics/mtbpics/07crossmacMTB.jpg">
                </div>
                <!--details-->
                <div class="product-details ">
                     <a href="#" class="p-name">Crossmac MTB</a>
                    <span class="p-price">₱18,000</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal19">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
            <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Crossmac MTB</h4>
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body2 text-dark text-center">
          
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/mtbpics/07crossmacMTB.jpg" width="90%"  
                height="50%"  class="img-thumbnail" >
               <br><a href="#" class="p-name "> Crossmac MTB</a>
           <br><span class="p-price ">₱18,000</span>


        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Crossmac MTB">
            <input type="hidden" name="Price" value="18000">
        </div>  
      </div>
    </div>
  </div>
  </form>


</div>
</div>
</section>

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
    
    <!--jQuery CDN-->
    <script src="js/lightslider.js"></script>
    <script src="js/jQueryCDN.js"></script>
    <script src="js/jquery.js"></script>
    <!--script-->
    <script type="text/javascript">
    </script>
</html>