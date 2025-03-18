<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
</head>
<body div class="bg-image" style="
      background-image: url('allpics/images/bg1.jpg');
      height: 100vh;
      ">
        <nav>
            <!--menu-bar-->
            <div class="navigation">
               
                <!--logo-->
                <a href="#" class="logo">
                     <img src="allpics/images/logofinal4.png" />
                </a>
                <!--menu-->
               </div>
            
        </nav>
         <div class="container">
            <div class="row text-center">


                     <a href="jjlrnbikeshop.php " class="user font-weight-bolder far fa-user border rounded bg-info text-light col-lg-12 my-5">
                    <i > 
                       <h1 class= 'far fa-user  col-lg-12' >HOME   </h1>  </i>
                </a>    
            </div>
        </div>
               

<div class="row">


    <div class="container">
   <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
              <?php echo "<h1 >Do you want to log out? " . $_SESSION['username'] . "</h1>"; ?>
         
        </div>
           <a href="logout.php" class=" col-lg-12 text-center btn btn-danger fs-1">Logout</a>
          
    </div>
</div>
</div>

</body>
</html>