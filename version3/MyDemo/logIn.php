<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once "fileClass/User.php";
    include_once "fileClass/UserManager.php";

    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $password = base64_encode($password);
    $userManager = new UserManager('data.json');
    $user = $userManager->checkUser($userName, $password);
    echo " Đăng nhập thành công." ;

    header("refresh:1;url=userIndex.php");

    //header( "refresh:5;url=wherever.php" );

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
            height: 180px;
            width: 600px;
            padding: 20px;
            border: 3px blue solid;
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
                    <td><input type="text" name="userName" pattern="^[a-z]\w[^\s]{2,20}$" title="User name phải bắt đầu bằng chữ và không có khoảng trống!" placeholder="Nhập tài khoản" size="50"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" pattern="\w{6,20}$" title="Mật khẩu tối thiểu 6 ký tự." placeholder="Nhập mật khẩu" size="50"></td>
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


