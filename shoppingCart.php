
<?php 
    session_start();
    require('connection.php');
    require('truyvan.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giỏ Hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      function confirmss(){
           if(confirm("Bạn có chắc muốn xóa không ??? ")==true){
                delItems();
           }
      }
  </script>
  <style type="text/css">
  	th{
  		color: #004400;
  		font-size: 20px;
  		font-style: bold;
  	}
  	h2{
  		padding: 30px;
  		background-color: #DDDDDD;
  	}
  	table{
  		background-color: #FFFFCC;
  	}
  	.affect{
  		color: #000044;
  		font-size: 20px;
  		margin: 20px;
  	}
  	.font{
  		style:bold;
  		color: #003300;
  	}
  	

  </style>
</head>
<body>

<div class="container">
    <h2 class="text-center" style="color: #3300FF">Bảng thông tin mua hàng
    </h2>
    <form action="submit.php" method="post">
           	
          <table class="table table-condensed table-hover">
    	<tbody>
    		<?php 
                 if(isset($_SESSION['cart'])){

                 	?>
                 	<thead>
    		<tr>
    		<th style="width: 50%">Sản Phẩm</th>
    		<th style="width: 10%" class="text-center">Giá</th>
    		<th style="width: 10%" class="text-center">Số Lượng</th>
    		<th style="width: 20%" class="text-center" class="text-center">Thành Tiền</th>
    		<th style="width: 10%" class="text-center"></th>
    	</tr>
    	</thead>
                 	<?php  
                 	$total=0;

                 	// Phân trang cho giỏ hàng


                 	// 
                 	foreach ($_SESSION['cart'] as $key => $value) {
                        $sql="select * from book where id=$key";
                      //  echo "$sql"; 
                        $query=mysql_query($sql);
                        $row=mysql_fetch_array($query);
                        $query_publishername=getPublisherName($row['publisherid']);
                        $row_publishername=mysql_fetch_array($query_publishername);
                ?>
                <tr>
    			<td>
    			<div class="row">
    			<div class="col-lg-2 "><img src="../image/2.jpg" class="img-circle"></div>
    			<div class="col-lg-10">
    				<h4><span class="font">Mã sách :</span> <?php echo $row['id'] ?></h4>
    				<h5><span class="font">Tên sách :</span> <?php echo $row['bookname'] ?> </h5>
                    <p><span class="font">Nhà phát hành :</span><?php echo $row_publishername['publishername'] ?></p>
    			    <p><span class="font">Mô tả sản phẩm: </span><?php echo $row['description'] ?></p>
    			</div>

    		</div>
    		</td>
    		<td  class="text-center">
    			<?=$row['price'] ?>  VNĐ
    		</td>
    		<td>
    			<input  type="number" class="form-control text-center" name="qty[<?=$row['id'] ?>]" value="<?php echo $_SESSION['cart'][$row['id']] ?>">
    		</td>
    		<td  class="text-center">
    			<?php echo $row['price']*$_SESSION['cart'][$row['id']];

                  $total+=$row['price']*$_SESSION['cart'][$row['id']];
    			 ?>
    			  VNĐ
    		</td>
    		<td class="actions text-center" >
    			<a class="btn btn-danger" href="deleteCart.php?productid=<?php echo $row['id'] ?>">
    			 Xóa hàng</a>
    		</td>
    		</tr>
    		</tr> 
 
                 	<?php  
                 }
             }
                 else{
                 	echo "<h2 style=\"color: purple\"> Bạn chưa có chọn sản phẩm nào. Hãy chọn lấy 1 vài sản phẩm yêu thích </h2>";
                 }

    		 ?>

    			<?php 
                     if(isset($_SESSION['cart'])){

                     	?>
                     	  <tr>
                     	<td colspan="1"></td>

                     	<td><input class="btn btn-info btn-block" type="submit" name="submit" value="Cập nhật"></td>
                     	<!-- <td><a href="deleteCart.php?productid=0" class="btn btn-danger btn-block">Hủy giỏ hàng <i class="fa fa-angle-right"></i></a></td> -->
                      <td><input type="button" value="Xóa giỏ hàng" class="btn btn-info btn-block" onclick=" confirmss();"></td>
                     	</tr>
    		           <tr>
    				   <td class="text-center" colspan="5">
    				   <h3 style="color: purple">Tổng Tiền : <?php echo $total?> VNĐ</h3>
    			       </td></tr>
                     	<?php  
                     }

    			 ?>
    			
    	</tbody>
    	<tfoot>
    		<tr>
    			<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left">Đến mua hàng</i></a></td>
    			<td></td>
    			<td></td>
    			<td></td>
    			
    			<?php 
                     if(isset($_SESSION['cart'])){

                     	?>
                     	<td><input class="btn btn-success btn-block" type="submit" name="Payment" value="Thanh Toán"></td>
                     	<?php  
                     }

    			 ?>
    			
    		</tr>

    	</tfoot>
    </table>
     <label><h3 style="style:bold; color: red">Thông tin cá nhân</h3> </label>
    <table border="1px" style="background-color: #99CCCC">
        <?php 

            if(isset($_SESSION['name'])){


         ?>
    	<tr>
    		<td class="affect">Nhập tên bạn</td>
    		<td><input type="text" name="name" required="true" value="<?=$_SESSION['name'] ?>"></td>
    		<td class="affect">
    			Số điện thoại
    		</td>
    		<td>
    			<input type="text" name="phone" required="true" value="<?=$_SESSION['phone'] ?>">
    		</td>
    		<td class="affect">Địa chỉ nhận</td>
    		<td>
    			<textarea cols="50" rows="2" name="address" required="true"><?=$_SESSION['address'] ?></textarea>
    		</td>
    	</tr>
    	<?php 
         
         }else{
         	?>
              <tr>
    		<td class="affect">Nhập tên bạn</td>
    		<td><input type="text" name="name" required="true"></td>
    		<td class="affect">
    			Số điện thoại
    		</td>
    		<td>
    			<input type="text" name="phone" required="true" ">
    		</td>
    		<td class="affect">Địa chỉ nhận</td>
    		<td>
    			<textarea cols="50" rows="2" name="address" required="true"></textarea>
    		</td>
    	</tr>

    	<?php

         }


    	 ?>

    </table> 
    </form>
</body>
</html>
</body>
</html>


<!-- <?php 
     $sotin1trang=4;
     if(isset($_GET['trang'])){
        $trang=$_GET['trang'];
        settype($trang,"int");
     }else{
        $trang=1;
     }

     $start=($trang-1)*$sotin1trang;
     $limit=$start+$sotin1trang;
     for($i=$start;$i<$limit;$i++){

 ?>
 <tr>
    			<td>
    			<div class="row">
    			<div class="col-lg-2 "><img src="../image/2.jpg" class="img-circle"></div>
    			<div class="col-lg-10">
    				<h4><span class="font">Mã sách :</span> <?php echo $row['id'] ?></h4>
    				<h5><span class="font">Tên sách :</span> <?php echo $row['bookname'] ?> </h5>
                    <p><span class="font">Nhà phát hành :</span><?php echo $row_publishername['publishername'] ?></p>
    			    <p><span class="font">Mô tả sản phẩm: </span><?php echo $row['description'] ?></p>
    			</div>

    		</div>
    		</td>
    		<td  class="text-center">
    			<?=$row['price'] ?>  VNĐ
    		</td>
    		<td>
    			<input  type="number" class="form-control text-center" name="qty[<?=$row['id'] ?>]" value="<?php echo $_SESSION['cart'][$row['id']] ?>">
    		</td>
    		<td  class="text-center">
    			<?php echo $row['price']*$_SESSION['cart'][$row['id']];

                  $total+=$row['price']*$_SESSION['cart'][$row['id']];
    			 ?>
    			  VNĐ
    		</td>
    		<td class="actions text-center" >
    			<a class="btn btn-danger" href="deleteCart.php?productid=<?php echo $row['id'] ?>">
    			 Xóa hàng</a>
    		</td>
    		</tr>
<?php }
 
     $t=TinTheoLoaiTin($idLT);
     $tongsotin=mysql_num_rows($t);
     $tongsotrang=ceil($tongsotin/$sotin1trang);
     for($i=1;$i<=$tongsotrang;$i++){
        ?>
        <span class="phantrang">
        <a <?php if($i==$trang) echo "style='background-color: red'" ?> href="index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i ?>"><?php echo $i ?></a></span>
        <?php 
     }
  
 ?> -->