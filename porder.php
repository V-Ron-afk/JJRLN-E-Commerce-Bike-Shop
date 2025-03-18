<?php 

session_start();
foreach ($_SESSION['cart'] as $key => $value){
  if(condition){
    unset($_SESSION['cart'][$key]);
  }
}

header("Location: checkout.php");

?>