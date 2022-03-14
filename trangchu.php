<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenta</title>
</head>
<body>
    <?php 
    $login=false;//biến kiểm tra
    if(!empty($_SESSION["customer"])){//kiểm tra xem đã có tài khaonr nào được đăng kí hay chưa
    if(!empty($_POST["userName"]&&!empty($_POST["passWord"]))){
    $login=array("user"=>$_POST["userName"],"pass"=>$_POST["passWord"]);
    for($i=0;$i<count($_SESSION["customer"]);$i++){//kiểm tra xem user và pass vừa nhập có tồn tại trong SESSION hay không
    //nếu thỏa mãn biến login = true.
    if($_SESSION["customer"][$i]["user"]==$login["user"]&&$_SESSION["customer"][$i]["pass"]==$login["pass"]) {$login=true;break;}
    }
    if($login)  echo "hí, chào bạn ".$_SESSION["customer"][$i]["user"]." đã đến với website của mình. Đã có ".count($_SESSION["customer"])." tài khoản đăng kí trên zenta";    
}
else{
    echo "bạn chưa nhập tài khoản hoặc mật khẩu. Nhập lại <a href ='index.php'>tại đây</a>";
}
    }
    else{
        echo "chưa có tài khoản nào được đăng kí";
        echo ", đăng kí <a href='dangki.php'>tại đây</a>";
    }
    ?>
</body>
</html>