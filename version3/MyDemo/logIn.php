<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once "fileClass/User.php";
    include_once "fileClass/UserManager.php";

    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];

    if (isset($_REQUEST['userName']) == $userName->getUserLogIn() &&
        isset($_REQUEST['password']) == $password->getUserLogIn()) {
        echo "dang nhap thanh cong.";
        header('location: userIndex.php');

    } else {
        echo "tk and mk khong dung.";
        require "logIn.php";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input {
        height: 25px;
    }

    form {
        margin-top: 25px;
    }
</style>
<body>
<h1 style="color: blue">Trang đăng nhập</h1>
<a href="index.php">Quay lại trang chủ</a><br/>
<form action="" method="post">
    <fieldset>
        <legend>Đăng nhập</legend>
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="userName" placeholder="Nhập tài khoản"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Nhập mật khẩu"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="logIn">Đăng nhập</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>

