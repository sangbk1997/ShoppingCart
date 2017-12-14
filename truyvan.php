<?php 

    require('./connection.php');

    // ham dua ra danh sach cac sach co trong cua hang
    function listBook(){
    	$sql='SELECT * FROM BOOK order by id desc';
    	return mysql_query($sql);
    }

    // ham tra ve thong tin cua mot loai sach 

    function findbyidbook($id){
    	$sql="SELECT * FROM BOOK where id=$id";
    	return mysql_query($sql);
    }

    // ham update lại cơ sở dữ liệu sau khi khách hàng đã mua hàng 

    function ChangeQuantity($id,$temp){
    	$sql="update book set quantity=(quantity-$temp) where id=$id";
    	mysql_query($sql);
    }

    // dua ra ten nha phat hanh

    function getPublisherName($id){
    	$sql="SELECT * from publisher where id=$id";
    	return mysql_query($sql);
    }

    // xóa hàng 
       function delItems(){
        session_start();
        if($_SESSION['cart']){
            $id=$_GET['productid'];
            if($id==0){
                 unset($_SESSION['cart']);

            }else{
                unset($_SESSION['cart'][$id]);
           }
           header("location:shoppingCart.php");
           exit();
        }
    }
 ?>