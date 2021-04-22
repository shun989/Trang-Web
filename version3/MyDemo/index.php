<?php

include_once "fileClass/UserManager.php";
include_once "fileClass/UserInformation.php";
include_once "fileClass/UserInformationManager.php";

$userInformationManager = new UserInformationManager('user_information/userData.json');
$usersInformation = $userInformationManager->getAll();
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
        margin-top: 50px;
    }

    a {
        margin-left: 10px;
    }

    form{
        width: 200px;
        float: right;
    }
</style>
<body>
<form>
    <fieldset>
        <a href="add.php">Đăng ký</a>
        <a href="logIn.php">Đăng nhập</a>
    </fieldset>
</form>
<div class="container">
    <h1 style="color: blue">Danh sách thành viên</h1>
    <table border="">
        <p></p>
        <tr style="background-color: lawngreen; font-size: 20px">
            <th>STT</th>
            <th>Name</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>ID Card</th>
        </tr>
        <?php foreach ($usersInformation as $key => $userInformation) { ?>
            <tr>
                <td><?php echo $key + 1; ?> </td>
                <td><?php echo $userInformation->getName(); ?> </td>
                <td><?php echo $userInformation->getDob(); ?> </td>
                <td><?php echo $userInformation->getAddress(); ?> </td>
                <td><?php echo $userInformation->getEmail(); ?> </td>
                <td><?php echo $userInformation->getPhone(); ?> </td>
                <td><?php echo $userInformation->getIdCard(); ?> </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
