<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer_information</title>
</head>
<body>
    <!-- xóa dữ liệu khách hàng -->
<?php if(isset($_GET['remove'])){
unset($_SESSION["customer"]);
 //Redirecting After Unset SESSION
  header('location:customer_information.php');
  }
 ?> 
<?php if(!empty($_SESSION["customer"])){?>
<table border="1px" cellpadding="5px" cellspacing="0">
    <tbody>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>passWord</th>
        </tr>
    <?php for($i = 0 ; $i < count($_SESSION["customer"]) ; $i++) {?>
        <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $_SESSION["customer"][$i]["user"] ?></td>
        <td><?php echo $_SESSION["customer"][$i]["pass"] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>  
<a href="customer_information.php?remove=remove">Empty User</a> 
<?php } else
  echo "chưa có tài khoản nào được đăng kí cả";
 ?>
</body>
</html>