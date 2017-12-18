
<?php require('queryFunction.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin về các đầu sách</title>
</head>
<body>
    <h2>Danh sách các đầu sách</h2>
	<?php 

         $query=listBook();
         if(mysql_num_rows($query)>0){
         	while($row=mysql_fetch_array($query)){
         		?>
                 <div>
                    <h3>Mã sách : <?php echo $row['id'] ?></h3>
                 	<h3>Tên sách : <?php echo $row['bookname'] ?> </h3>
                 	<h4>Giá : <?php echo $row['price'] ?></h4>
                 	<p align="center"><a href="addcart.php?idBook=<?php echo $row['id'] ?>">Mua sach</a></p>
                 	<p align="center"><a href="deleteCart.php?productId=<?php echo $row['id'] ?>">Xóa sách</a></p>
                 </div>

         		<?php 
         		 
         	}
         }

	 ?>
</body>
</html>