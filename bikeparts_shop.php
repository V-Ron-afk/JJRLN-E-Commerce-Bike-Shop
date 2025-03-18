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
            <h2>BIKE PARTS </h2>
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
                    <div class="product-img">
                          <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/images/BOLANY FORKS.jpg " >
                 
                </div>
                <!--details-->
                <div class="product-details ">
                    <a href="#" class="p-name">BOLANY FORKS</a>
                    <span class="p-price">₱3,700</span>
                </div>
              </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >BOLANY FORKS</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body2 text-dark text-center">
              <div class="ribbon2"><span>NEW </span></div>
           <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
                <img id= "modaling" src="allpics/images/BOLANY FORKS.jpg" width="50%"  
                height="50%"  class="img-thumbnail" >
              <br>  
            <a href="#" class="p-name">BOLANY FORKS</a>
            <br>
           <span class="p-price">₱3700</span>


        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="BOLANY FORK">
            <input type="hidden" name="Price" value="3700">
>
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
                    <img src="allpics/parts/MAXXIS WIRED MTB TIRES1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">MAXXIS WIRED MTB TIRES</a>
                    <span class="p-price">₱760</span>
                </div>
                </button>

<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >MAXXIS WIRED MTB TIRES</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
             <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/MAXXIS WIRED MTB TIRES1.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name"> MAXXIS WIRED MTB TIRES </a>
           <br><span class="p-price ">₱760</span>

        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="MAXXIS WIRED MTB TIRES ">
            <input type="hidden" name="Price" value="760">
        </div>  
      </div>
    </div>
  </div>
</form>

  <!--product-box-7-->
                 <button class="product-box " data-toggle="modal" data-target="#myModal2">
                    <!--img-->
                    <div class="product-img">
                           <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/FIREBOX MTB AIR FORK1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">FOXEYE CALVIN 9</a>
                    <span class="p-price">₱9,990</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >FOXEYE CALVIN 9</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
               <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/FIREBOX MTB AIR FORK1.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> FOXEYE CALVIN 9 </a>
           <br><span class="p-price ">₱9,990</span>

        </div>
        <div class="modal-footer">
       <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="FOXEYE CALVIN 9">
            <input type="hidden" name="Price" value="9900">
        </div>  
      </div>
    </div>
  </div>
</form>

   <button class="product-box " data-toggle="modal" data-target="#myModal3">
                    <!--img-->
                    <div class="product-img">
                            <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/DEVEL FRAME.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">DEVEL FRAME</a>
                    <span class="p-price">₱33,700</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >DEVEL FRAME</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/DEVEL FRAME.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> DEVEL FRAME </a>
           <br><span class="p-price">₱33,700</span>

        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="DEVEL FRAME">
            <input type="hidden" name="Price" value="33700">
        </div>  
      </div>
    </div>
  </div>
</form>

  <button class="product-box " data-toggle="modal" data-target="#myModal4">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/Shimano ultegra r8000 fd1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Shimano ultegra r8000 fd</a>
                    <span class="p-price">₱3,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Shimano ultegra r8000 fd</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/Shimano ultegra r8000 fd1.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Shimano ultegra r8000 fd </a>
           <br><span class="p-price ">₱3,500</span>

        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Shimano ultegra r8000 fd">
            <input type="hidden" name="Price" value="3500">
        </div>  
      </div>
    </div>
  </div>
</form>

   <button class="product-box " data-toggle="modal" data-target="#myModal5">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/FIREBOX MTB AIR FORK1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">FIREBOX MTB AIR FORK</a>
                    <span class="p-price">₱8,300</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >FIREBOX MTB AIR FORK</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/FIREBOX MTB AIR FORK1.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> FIREBOX MTB AIR FORK </a>
           <br><span class="p-price ">₱3,500</span>

        </div>
        <div class="modal-footer">
        <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="FIREBOX MTB AIR FORK">
            <input type="hidden" name="Price" value="3500">
        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-11-->
                  <button class="product-box " data-toggle="modal" data-target="#myModal6">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/DVL Carbon Air Pro EVO Inverted Fork1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">DVL Carbon Air Pro EVO</a>
                    <span class="p-price">₱29,700</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal6">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >DVL Carbon Air Pro EVO</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/DVL Carbon Air Pro EVO Inverted Fork1.jpg" alt="Chania" 
                width="70%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> DVL Carbon Air Pro EVO </a>
           <br><span class="p-price ">₱29,700</span>

        </div>
        <div class="modal-footer">
          <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="DVL Carbon Air Pro EVO">
            <input type="hidden" name="Price" value="29700">
        </div>  
      </div>
    </div>
  </div>
</form>
                 <!--product-box-12-->
                  <button class="product-box " data-toggle="modal" data-target="#myModal7">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/Firebox king carbon series mtb1.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Firebox King Carbon</a>
                    <span class="p-price">₱45,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal7">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Firebox King Carbon</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/Firebox king carbon series mtb1.jpg" alt="Chania" 
                width="70%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name ">Firebox King Carbon </a>
           <br><span class="p-price ">₱45,000</span>

        </div>
        <div class="modal-footer">
         <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Firebox King Carbon">
            <input type="hidden" name="Price" value="45000">
        </div>  
      </div>
    </div>
  </div>
</form>
                <!--product-box-13-->
                  <button class="product-box " data-toggle="modal" data-target="#myModal8">
                    <!--img-->
                    <div class="product-img">
                        <div class="ribbon2"><span>NEW </span></div>
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/Entity.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Entity CT30 MTB Pedal</a>
                    <span class="p-price">₱2,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal8">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Entity CT30 MTB Pedal</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
            <div class="ribbon2"><span>NEW </span></div>

                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/Entity.jpg" alt="Chania" 
                width="70%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name">Entity CT30 MTB Pedal </a>
           <br><span class="p-price ">₱2,500</span>

        </div>
        <div class="modal-footer">
       <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Entity CT30 MTB Pedal ">
            <input type="hidden" name="Price" value="2500">
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
                    <img src="allpics/parts/01fatbarHANDLEBAR.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Fat Bar Handle Bar</a>
                    <span class="p-price">₱3,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal9">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Fat Bar Handle Bar</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/01fatbarHANDLEBAR.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Fat Bar Handle Bar</a>
           <br><span class="p-price ">₱3,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Fat Bar Handle Bar">
            <input type="hidden" name="Price" value="3000">
      
        </div>  
      </div>
    </div>
  </div>
   </form>

     <button class="product-box " data-toggle="modal" data-target="#myModal10">
                    <!--img-->
                    <div class="product-img">
                        
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/02Kask Protone Helmet.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name"> Kask Protone Helmet </a>
                    <span class="p-price">₱1,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal10">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Kask Protone Helmet</h4>
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/02Kask Protone Helmet.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Kask Protone Helmet</a>
           <br><span class="p-price ">₱1,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Kask Protone Helmet">
            <input type="hidden" name="Price" value="1000">
        
        </div>  
      </div>
    </div>
  </div>
   </form>

     <button class="product-box " data-toggle="modal" data-target="#myModal11">
                    <!--img-->
                    <div class="product-img">
                        
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/03PowerBikeSaddles.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Power Bike Saddles</a>
                    <span class="p-price">₱800</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal11">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Power Bike Saddles</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/03PowerBikeSaddles.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Power Bike Saddles</a>
           <br><span class="p-price ">₱800</span>

        </div>
        <div class="modal-footer">
            <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Power Bike Saddles">
            <input type="hidden" name="Price" value="800">
        </div>  
      </div>
    </div>
  </div>
   </form>

     <button class="product-box " data-toggle="modal" data-target="#myModal12">
                    <!--img-->
                    <div class="product-img">
                        
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/04ShimanoTiagraShiftersBrake.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Shimano Tiagra Shifters Brake</a>
                    <span class="p-price">₱2,000</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal12">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >Shimano Tiagra Shifters Brake</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/04ShimanoTiagraShiftersBrake.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> Shimano Tiagra Shifters Brake</a>
           <br><span class="p-price ">₱2,000</span>

        </div>
        <div class="modal-footer">
             <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value="Shimano Tiagra Shifters Brake">
            <input type="hidden" name="Price" value="2000">
        </div>  
      </div>
    </div>
  </div>
   </form>

     <button class="product-box " data-toggle="modal" data-target="#myModal13">
                    <!--img-->
                    <div class="product-img">
                        
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/05SramShifter.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">S ram Shifter</a>
                    <span class="p-price">₱2,500</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal13">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >S ram Shifter</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/05SramShifter.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> S ram Shifter</a>
           <br><span class="p-price ">₱2,500</span>

        </div>
        <div class="modal-footer">
              <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value=" S ram Shifter">
            <input type="hidden" name="Price" value="2500">

        </div>  
      </div>
    </div>
  </div>
   </form>

     <button class="product-box " data-toggle="modal" data-target="#myModal14">
                    <!--img-->
                    <div class="product-img">
                        
                           <!--add-to-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="allpics/parts/06SworksHelmet.jpg">
                </div>
                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">S WORKS Helmet</a>
                    <span class="p-price">₱900</span>
                </div>
                </button>
<form action="manage_cart.php " method="POST">
<div class="modal fade" id="myModal14">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 class="modal-title text-center" class="mx-auto" style="width: 600px;" >S WORKS Helmet</h4> 
             <button type="button" class="close float-lg-left  text-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-dark text-center">
                  
                <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="allpics/parts/06SworksHelmet.jpg" alt="Chania" 
                width="100%" height="100%"   cclass="img-thumbnail" >
            
            <br><a href="#" class="p-name "> S WORKS Helmet</a>
           <br><span class="p-price ">900</span>

        </div>
        <div class="modal-footer">
           <button type="submit" name="Add_To_Cart" class="btn btn-danger col-lg-12"  >Add to cart</button>
            <input type="hidden" name="Item_Name" value=" S WORKS Helmet">
            <input type="hidden" name="Price" value="900">
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