<?php 

    session_start();
    if(isset($_SESSION['cart'])){
         $id=$_GET['productid'];
         if($id==0){
              unset($_SESSION['cart']);

         }else{
             unset($_SESSION['cart'][$id]);
         }
    }
    header("location:shoppingCart.php");
    exit();

?>
