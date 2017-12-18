
<?php 
    session_start();
    require('connection.php');
    require('queryFunction.php');
    $id=$_GET['id'];
    $row=mysql_fetch_array(findbyidbook($id));
    echo $row['quantity'];

 ?>