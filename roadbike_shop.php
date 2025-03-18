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
    
                    <li><a href="mtb_shop.php">Mountain Bike</a>
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
            <h2>Road Bike </h2>
            <div class="arrival-heading">
                <p>We Provide You Quality & Affordable Design Product Of Bikes And Bike Parts</p>
            </div>
        </div>
    </div>
</div>

<section class="new-arrival col-lg-12">
            <!--heading-->
                <div class="container-product">
              <div class="row">
            <!--product-container-->
           <button class="product-box " data-toggle="modal" data-target="#myModal">
                    <!--img-->
                    <div class="product-img">
                           <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/images/TWITTER T10 PRO D-BRAKE.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">TWITTER T10 PRO D-BRAKE</a>
                    <span class="p-price">₱50,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TWITTER T10 PRO D-BRAKE</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                   <div class="ribbon2"><span>NEW </span></div>
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/images/TWITTER T10 PRO D-BRAKE.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> TWITTER T10 PRO D-BRAKE</a>
           <br><span class="p-price ">₱50,000</span>

        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TWITTER T10 PRO D-BRAKE">
            <input type="hidden" name="Price" value="50000">
      
        </div>  
      </div>
    </div>
  </div>
   </form>


   <button class="product-box " data-toggle="modal" data-target="#myModal1">
                    <!--img-->
                    <div class="product-img">
                           <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/images/PROMAX CHESTER RB (700c) 2021.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">PROMAX CHESTER RB</a>
                    <span class="p-price">₱12,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >PROMAX CHESTER RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                   <div class="ribbon2"><span>NEW </span></div>
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/images/PROMAX CHESTER RB (700c) 2021.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> PROMAX CHESTER RB</a>
           <br><span class="p-price ">₱12,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="PROMAX CHESTER RB">
            <input type="hidden" name="Price" value="12000">
        </div>  
      </div>
    </div>
  </div>
</form>

   <!--product-box-5-->
                <button class="product-box " data-toggle="modal" data-target="#myModal2">
                    <!--img-->
                    <div class="product-img">
                           <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/images/STOUT CAMPIONE (700c) .jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">STOUT CAMPIONE</a>
                    <span class="p-price">₱13,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >STOUT CAMPIONE</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                   <div class="ribbon2"><span>NEW </span></div>
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/images/STOUT CAMPIONE (700c) .jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> STOUT CAMPIONE</a>
           <br><span class="p-price ">₱13,000</span>


        </div>
        <div class="modal-footer">
           <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="STOUT CAMPIONE">
            <input type="hidden" name="Price" value="13000">
        </div>  
      </div>
    </div>
  </div>
</form>


  <button class="product-box " data-toggle="modal" data-target="#myModal3">
                    <!--img-->
                    <div class="product-img">
                      
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/DolanRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">DOLAN RB</a>
                    <span class="p-price">₱40,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >DOLAN RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                 
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/DolanRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> DOLAN RB </a>
           <br><span class="p-price ">₱40,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="DOLAN RB">
            <input type="hidden" name="Price" value="40000">
        </div>  
      </div>
    </div>
  </div>
   </form>


  <button class="product-box " data-toggle="modal" data-target="#myModal4">
                    <!--img-->
                    <div class="product-img">
                          
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/FactorRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Factor RB</a>
                    <span class="p-price">₱35,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Factor RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/FactorRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Factor RB</a>
           <br><span class="p-price ">₱35,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Factor RB">
            <input type="hidden" name="Price" value="35000">
        
        </div>  
      </div>
    </div>
  </div>
   </form>


  <button class="product-box " data-toggle="modal" data-target="#myModal5">
                    <!--img-->
                    <div class="product-img">
                          
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/FeltUlraRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Felt Ultra RB</a>
                    <span class="p-price">₱30,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Felt Ultra RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                 
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/FeltUlraRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Felt Ultra RB</a>
           <br><span class="p-price ">₱30,000</span>

        </div>
        <div class="modal-footer">
            <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Felt Ultra RB">
            <input type="hidden" name="Price" value="30000">
      
        </div>  
      </div>
    </div>
  </div>
   </form>


  <button class="product-box " data-toggle="modal" data-target="#myModal6">
                    <!--img-->
                    <div class="product-img">
                         
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/OrbeaRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Orbea RB</a>
                    <span class="p-price">₱28,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal6">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Orbea RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/OrbeaRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Orbea RB</a>
           <br><span class="p-price ">₱28,000</span>

        </div>
        <div class="modal-footer">
              <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Orbea RB">
            <input type="hidden" name="Price" value="28000">
       
        </div>  
      </div>
    </div>
  </div>
   </form>


  <button class="product-box " data-toggle="modal" data-target="#myModal7">
                    <!--img-->
                    <div class="product-img">
                           
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/PinarelloRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">PINARELLO RB</a>
                    <span class="p-price ">₱50,000</span>
                    
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal7">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >PINARELLO RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                 
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/PinarelloRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> PINARELLO RB</a>
           <br><span class="p-price ">₱50,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="PINARELLO RB">
            <input type="hidden" name="Price" value="50000">
        
        </div>  
      </div>
    </div>
  </div>
   </form>


  <button class="product-box " data-toggle="modal" data-target="#myModal8">
                    <!--img-->
                    <div class="product-img">
                        
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/sworksRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">S WORKS RB</a>
                    <span class="p-price">₱25,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal8">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >S WORKS RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/sworksRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> S WORKS RB</a>
           <br><span class="p-price ">₱25,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value=" S WORKS RB">
            <input type="hidden" name="Price" value="25000">
        
        </div>  
      </div>
    </div>
  </div>
   </form>


  <button class="product-box " data-toggle="modal" data-target="#myModal9">
                    <!--img-->
                    <div class="product-img">
                           
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/rbpics/TrekRB.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">TREK RB</a>
                    <span class="p-price">₱22,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal9">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >TREK RB</h4> 
          <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/rbpics/TrekRB.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> TREK RB </a>
           <br><span class="p-price ">₱22,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="TREK RB">
            <input type="hidden" name="Price" value="22000">
         
        </div>  
      </div>
    </div>
  </div>
   </form>

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