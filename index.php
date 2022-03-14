<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Văn Tú vjp pro</title>
    <link rel="stylesheet" href="dangNhap.css">
</head>
<body>
    <div class="container_left">
        <div class="content_container_left">
            <div class="logo">Zenta</div>
            <div class="sologan">Sân chơi của giới trẻ, hãy chơi theo cách của bạn</div>
        </div>
    </div>
    <div class="container_right">
        <div class="form_login">
            <form action="trangchu.php" method="post">
                <table cellspacing="17px">
                <tr>
                    <td>
                        <input type="text" name="userName" class="userName" id="" placeholder="Email hoặc số điện thoại">
                    </td>
                </tr>
                <tr>
                   <td>
                    <input type="password" name="passWord" class="passWord" id="" placeholder="Mật Khẩu"> 
                   </td> 
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Đăng nhập" class="dangnhap">
                    </td>
                </tr>
                <tr>
                    <th ><a href="" class="forgot_pass">Quên mật khẩu?</a></th>
                </tr>
                <tr>
                    <th style="border-bottom: 1px solid #dddfe2;"></th>
                </tr>
                <tr>
                    <th><a href="dangki.php" class="creat_account">Tạo tài khoản mới</a></th> 
                </tr>  
                </table>
            </form>
        </div>
    </div>
</body>
</html>