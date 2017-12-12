<?php 
    session_start();
    require('truyvan.php');
    if(isset($_SESSION['cart'])){

    	foreach ($_SESSION['cart'] as $key => $value) {
    		# code...
    		$query=findbyidbook($value);
    		echo "Câu lênh : $query";
            
                 		$row_Book=mysql_fetch_array($query);

                 		?>

    		<script type="text/javascript">
    			$(document).ready(function(){
    				var cost=$row_Book['price'];
    				var amount=$("#<?php echo $row_Book['id'] ?>").html();
    				var temp=cost*amount;
    				alert(temp);
    				$('#tinhtien_ <?php echo $row_Book['id'] ?>').html(temp);
    			})
    		</script>
    		<?php  
    	}

    }else{
          echo "Không tồn tại Session nào ";
    }
  //  header("location:shoppingCart.php");

 ?>