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

    table {
        border: 1px black solid;
        border-collapse: collapse;
        width: 100%;
        height: 30px;
        text-align: center;
    }

    th {
        height: 30px;
    }

    td {
        height: 25px;
    }

    tr:hover {
        background-color: wheat;
        cursor: pointer;
    }

    h1 {
        text-align: center;
    }
    a{
        margin: 10px;
    }
</style>
<body>
<a href="add.php">Đăng ký</a>
<a href="logIn.php">Đăng nhập</a>
<h1>Hello world !</h1>
</body>
</html>
