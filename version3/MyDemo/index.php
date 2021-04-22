<?php

include_once "fileClass/User.php";
include_once "fileClass/UserManager.php";
$userManager = new UserManager('data.json');
$users = $userManager->getAll();
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

    h1 {
        text-align: center;
        margin-top: 50px;
    }

    a {
        margin-right: 10px;
    }
    div{
        float: right;
    }
</style>
<body>
<div>
    <a href="add.php">Đăng ký</a>
    <a href="logIn.php">Đăng nhập</a>
</div>
<h1>Hello world !</h1>
</body>
</html>
