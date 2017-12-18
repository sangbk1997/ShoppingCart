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

    function getAuthorName($id){
        $sql="SELECT * from author where id=$id";
        return mysql_query($sql);
    }

    // hàm insert thông tin khách hàng 

    function insertCustomer($name, $email, $address, $gender, $phone){
        $sql="INSERT INTO customer(name, email, address, gender, phone) VALUES ('".$name."','".$email."','".$address."','".$gender."','".$phone."');";
        mysql_query($sql);
    }

    // hàm insert thông tin chi tiết mua hàng 

    function insertOrderDetail($bookId, $orderId, $quantity, $cost){
        $sql="INSERT INTO orderdetail(bookid, orderid, quantity, cost) VALUES ('".$bookId."','".$orderId."','".$quantity."','".$cost."')";
        echo $sql;
        mysql_query($sql);
    }

 ?>