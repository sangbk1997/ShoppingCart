
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trang xác nhận</title>
</head>
<body>
  <?php 
    session_start();
    require('queryFunction.php');
    if(isset($_POST['update'])){
      foreach ($_POST['qty'] as $key => $value) {
        # code...
        if($value<=0){
          unset($_SESSION['cart'][$key]);
        }elseif($value > 0){

              $row=mysql_fetch_array(findbyidbook($key));
              if($value <= $row['quantity']){
                  $_SESSION['cart'][$key]=$value;
              }else{
                  $_SESSION['cart'][$key]=$row['quantity'];
              }
        }
      }
    header("location:shoppingCart.php");
    }
    if(isset($_POST['Payment'])) {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phone=$_POST['phonenumber'];
        $gender=$_POST['dropdown'];

        // thiết lập orderIDlà số hàng hiện có trong database 
        $sql="SELECT * FROM orderdetail ";
        $query=mysql_query($sql);
        $orderId=mysql_num_rows($query);
        echo $orderId;

        foreach ($_SESSION['cart'] as $key => $value) {
            # code...
          // thểm thông tin mua hàng vào database 

          insertOrderDetail($key, $orderId, $_SESSION['cart'][$key], $_SESSION['cost'][$key]);
          // chỉnh sửa lại số lượng đầu sách còn trong database
            ChangeQuantity($key,$value);

        }
        insertCustomer($name, $email, $address, $gender, $phone);
        if($_SESSION['cart']){
           unset($_SESSION['cart']);

        }
        if($_SESSION['cost']){
          unset($_SESSION['cost']);
        }
       header("location:index.php");
    }
 ?>
</body>
</html>
