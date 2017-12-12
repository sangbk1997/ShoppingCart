
<?php 
    session_start();
    require('truyvan.php');
    if(isset($_POST['submit'])){
    	foreach ($_POST['qty'] as $key => $value) {

             $_SESSION['name']=$_POST['name'];
            $_SESSION['phone']=$_POST['phone'];
            $_SESSION['address']=$_POST['address'];   
           
    		# code...
    		if($value<=0){
    			unset($_SESSION['cart'][$key]);
    		}elseif($value > 0){
    			$_SESSION['cart'][$key]=$value;
                echo "<br>";
                echo $_SESSION['cart'][$key];
             
    		}
    	}
    	header("location:shoppingCart.php");
    }
    if(isset($_POST['Payment'])){

        foreach ($_SESSION['cart'] as $key => $value) {
            # code...

            ChangeQuantity($key,$value);

        }
        ?>
          <script type="text/javascript">
              alert("Bạn vừa nhấn vào Thanh Toán");

          </script>

          <h3>Thanh toán được thực hiện</h3>

          <p>
              Xin chào <b> <?php echo $_POST['name'] ?> </b>
              bạn vừa mua hàng từ chúng tôi . Hàng của bạn sẽ được đóng gói và gửi cho bạn nhanh nhất có thể tới địa chỉ <b><?php echo $_POST['address'] ?></b> <br>
              Hẹn gặp lại bạn sau . <b>Chúc bạn một ngày vui vẻ !</b>
          </p>

        <?php 

        // code update trong co so du lieu 

      //   header("location:shoppingCart.php");
    }
 ?>