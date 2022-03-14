<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
</head>
<body>
<?php 
//kiểm tra xem người dùng nhập đủ tài khoản mật khẩu chưa
if(!empty($_POST["userName"]&&!empty($_POST["passWord"]))){
$guest=array("user"=>$_POST["userName"],"pass"=>$_POST["passWord"]);//tạo mảng liên kết tạm thời lueu trữ dữ liệu
if(empty($_SESSION["customer"])){//Nếu chưa có tài khoản nào được đăng kí thì không kiểm tra.
$_SESSION["customer"][]=$guest;
echo "đã đăng kí thành công, đăng nhập <a href='index.php'>tại đây</a>";
}
else{
  for($i=0;$i<count($_SESSION["customer"]);$i++){
    if($_SESSION["customer"][$i]["user"]==$guest["user"]){//kiểm tra xem tên người dùng vừa nhập đã tồn tại hay chưa
      echo "<h1>ÉT O ÉT</h1>";
      echo "Tên người dùng bạn vừa nhập ".$guest["user"]." đã tồn tại xin vui lòng nhập lại
      <a href='dangki.php'>tại đây</a>";
      break;
    }
    else{
      $_SESSION["customer"][]=$guest;
      echo "đã đăng kí thành công, đăng nhập <a href='index.php'>tại đây</a>";
      break;
    }
  }
}
}
else echo "Chưa nhập đủ thông tin, xin vui lòng nhập lại <a href='dangki.php'>tại đây</a>";



?>

</body>
</html>