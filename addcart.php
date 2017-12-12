<?php 
      session_start();
      $id=$_GET['idBook'];
      if(isset($_SESSION['cart'][$id])){
      	 $quantity=$_SESSION['cart'][$id]+1;
      }else{
      	 $quantity=1;
      }
      $_SESSION['cart'][$id]=$quantity;
      header(("location:shoppingCart.php"));
       
 ?> 