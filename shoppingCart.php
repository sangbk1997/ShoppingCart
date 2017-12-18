
<?php 
    session_start();
    require('connection.php');
    require('queryFunction.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">

// hàm xác nhận xóa hàng
      function confirmDel(id){
        var url="deleteCart.php?productid=";
        url=url.concat(id);
        var temp=confirm(" Do you want delete items ??? ");
          if(temp==true){
            window.location.assign(url);
          }
      }
// Kiểm tra dữ liệu nhập vào có đầy đủ hay không
      function checkInfo(){
         if(document.frm.name.value==""){
             alert(" Please write your name into a from bellow !!! ");
             document.frm.name.focus();
             return false;
         }
          if(document.frm.email.value==""){
             alert(" Please write your email into a from bellow !!!  ");
             document.frm.email.focus();
             return false;
         }
        
         if(document.frm.address.value==""){
             alert(" Please write your name address a from bellow !!! ");
             document.frm.address.focus();
             return false;
         }
          if(document.frm.phonenumber.value==""){
             alert(" Please write your phone number into a from bellow !!!  ");
             document.frm.phonenumber.focus();
             return false;
         }
         if(confirm("Do you want to pay ??? ")==false){
            return false;
         }
         return true;

      }

      // Kiểm tra số điện thoại nhập vào :

      $(document).ready(function() {
          $('#txtPhone').blur(function(e) {
              if (validatePhone('txtPhone')) {
                $('#spnPhoneStatus').html('Valid');
                $('#spnPhoneStatus').css('color', 'green');
              }
                else {
                   $('#spnPhoneStatus').html('Invalid');
                   $('#spnPhoneStatus').css('color', 'red');
                }
         });
      });

       function validatePhone(txtPhone) {
           var a = document.getElementById(txtPhone).value;
           var filter = /^[0-9-+]+$/;
           if (filter.test(a)) {
               return true;
            }
            else {
               return false;
            }      
      }



     // Kiểm tra số lượng hàng chọn với tổng số lượng có sẵn
      function checkValOfAmount(id,amount,name1){
         var ajaxRequest;
         try{
   
             // Voi cac trinh duyet hien dai: Opera 8.0+, Firefox, Safari
              ajaxRequest = new XMLHttpRequest();
              }catch (e){
      
                 // Voi trinh duyet IE
                    try{
                       ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                   }catch (e) {
         
                          try{
                             ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                          }catch (e){
         
                         // Thong bao khi xay ra loi
                             alert("Error with your browser  !!!");
                            return false;
                   }
               }
          }
          // Tạo một hàm để nhận dữ liệu được gửi từ server 
          ajaxRequest.onreadystatechange = function(){
             if(ajaxRequest.readyState==4){
                 var respond = ajaxRequest.responseText;
                 if(Number(amount) > Number(respond)){
                     alert("Your choose : " + amount + " books ! ... -- >"+ " But now we having : "+respond + " books");
                     alert("Please choose a number is smaller than limit !!!");
                 }
             }
          }

        ajaxRequest.open("GET","ajax-confirmAmount.php?id="+id,true);
        ajaxRequest.send(null);
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
  		background-color: #FFFF99;
      color: #3300FF;
  	}
  	table{
  		background-color: #FFFFCC;
  	}
    td{
      margin: 50px;
    }

    tfoot tr{
      background-color: #CCCC99;
    }
    select{
       margin-left: 30px;
    }
    h2{
      font-size: 40px;
      font-weight: 500;
      font-family: Georgia,Arial,Helvetica;
      color: blue;
      text-align: center;
      background-color: #E0EEE0;
    }

  	.affect{
  		color: #000044;
  		font-size: 20px;
  		text-align: center;
  	}
  	.font{
  		style:bold;
  		color: #003300;
  	}



  </style>
</head>
<body>

<div class="container">
    <h2 class="text-center"> Purchase Information
    </h2>
    <form  name="frm" action="submit.php" method="post">
           	
          <table class="table table-condensed table-hover">
    	<tbody>
    		<?php 
                 $ok=1;
                 if(isset($_SESSION['cart'])){
                     foreach ($_SESSION['cart'] as $key => $value) {
                       # code...
                        if(isset($key)){
                          $ok=2;
                          break;
                        }
                     }
                     if($ok==2){

                      ?>

        <thead>
        <tr style="background-color: #99FF99">
        <th style="width: 36%; text-align: center;">Book Information</th>
        <th style="width: 12%" class="text-center">Price</th>
        <th style="width: 12%" class="text-center">Amount</th>
         <th style="width: 10%" class="text-center" class="text-center">Limit</th>
        <th style="width: 10%" class="text-center" class="text-center">Cost</th>
        <th style="width: 10%" class="text-center"></th>
      </tr>
      </thead>
                  <?php  
                  $total=0;
                  foreach ($_SESSION['cart'] as $key => $value) {
                        $sql="select * from book where id=$key";
                      //  echo "$sql"; 
                        $query=mysql_query($sql);
                        $row=mysql_fetch_array($query);
                        $query_authorname=getAuthorName($row['authorid']);
                        $row_authorname=mysql_fetch_array($query_authorname);
                        $query_publishername=getPublisherName($row['publisherid']);
                        $row_publishername=mysql_fetch_array($query_publishername);  // nhằm in được ra tên nhà phát hành sách 
                ?>
                <tr>
          <td>
          <div class="row">
          <div class="col-lg-4 "><?php echo '<img height = " 100px" width="100px" src="data:image/jpeg;base64,'.base64_encode( $row['cover'] ).'" class="img-circle"/>'; ?></div> 
          <div class="col-lg-8">
            <h4><span class="font">ID :</span> <?php echo $row['id'] ?></h4>
            <h5><span class="font">Name :</span> <?php echo $row['bookname'] ?> </h5>
            <p><span class="font">Author : </span><?php echo $row_authorname['authorname'] ?></p>
            <p><span class="font">Publisher :</span><?php echo $row_publishername['publishername'] ?></p>
              
          </div>

        </div>
        </td>
        <td  class="text-center">
          <?=$row['price'] ?>  $
        </td>
        <td>
          <input  id ="<?php echo $row['id'] ?>" type="number" class="form-control text-center" name="qty[<?=$row['id'] ?>]" value="<?php echo $_SESSION['cart'][$row['id']] ?>" onblur="checkValOfAmount(<?php echo $row['id']?>,this.value,this.name);">
        </td>
         <td  class="text-center">
          <?=$row['quantity'] ?>
        </td>
        <td  class="text-center">
          <?php echo $row['price']*$_SESSION['cart'][$row['id']];
                  $id=$row['id'];
                  $_SESSION['cost'][$id]=$row['price']*$_SESSION['cart'][$row['id']];
                  $total+=$row['price']*$_SESSION['cart'][$row['id']];
           ?>
            $
        </td>
        <td class="actions text-center" >
           <input type="button" class="btn btn-danger" value="Delete Book" onclick="confirmDel(<?php echo $row['id'] ?>);">  
        </td>
        </tr>
        </tr> 
 
                      <?php  
                    }

                    ?>
                      <tr>
                      <td colspan="1"></td>

                      <td><input class="btn btn-info btn-block" type="submit" name="update" value="Update"></td>
                      <td><input type="button" class="btn btn-danger btn-block" value="Delete Cart" onclick="confirmDel(0);"> </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      </tr>
                      <tr>
                        <td class="text-center" colspan="6">
                          <h3 style="color: purple">Current Total : <?php echo $total ?> $</h3>
                        </td>
                      </tr>

                    <?php  

                     }
                     else{
                          echo "<h2 style=\"color: purple ;\"> Your shopping cart is empty !!! </h2>";
                     }
                 }
             
                 else{
                 	echo "<h2 style=\"color: purple;\"> Your cart is not initialized  </h2>";
                 }
    		 ?>
    			
    	</tbody>
    	<tfoot>
    		<tr>
    			<td style="margin-bottom: 20px; padding: 20px"><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left">Add to Cart</i></a></td>
    			<td></td>
    			<td></td>
    			<td></td>
          <td></td>
    			
    			<?php 
                     if(isset($_SESSION['cart'])){
                       foreach ($_SESSION['cart'] as $key => $value) {
                         # code...
                          if(isset($key)){
                            ?>
                            <td style="margin-bottom: 20px ; padding: 20px"><input class="btn btn-success " type="submit" name="Payment" value="Make a payment" onclick="return checkInfo();"></td>
                            <?php 
                            break;
                          }
                       }
                     }
    			 ?>
    			
    		</tr>

    	</tfoot>
    </table>
      <div class="container">
            <div class="row">
                <h3 style="color: #790">Your Information</h3>
                <form class="form-inline">
                    <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group">
                            <label>Gender</label>
                            <select name="dropdown">
                                  <option value="Nam" selected>Male</option>
                                  <option value="Nữ">Female</option>
                            </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 100px">
                            <label>PhoneNumber</label>
                            <input id="txtPhone" type="text" name="phonenumber" class="form-control" placeholder="PhoneNumber">
                            <span id="spnPhoneStatus" style="padding: 20px"></span>
                    </div>
                    
                </form>
            </div>
        </div>
    </form>
</body>
</html>
</body>
</html>


