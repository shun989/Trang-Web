<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once "fileClass/UserInformation.php";
    include_once "fileClass/UserInformationManager.php";
    include_once "fileClass/UserManager.php";

    $name = $_REQUEST['name'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $idCard = $_REQUEST['idCard'];

    $data = [
        'name' => $name,
        'dob' => $dob,
        'address' => $address,
        'email' => $email,
        'phone' => $phone,
        'idCard' => $idCard,
    ];

    $userInformationManager = new UserInformationManager('user_information/userData.json');
    $userInformationManager->add($data);
    echo "Thêm thông tin thành công.";
    header('refresh:2,url=userIndex.php');

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
    input{
        height: 25px;
    }
    a {
        margin-left: 10px;
    }
</style>
<body>
<h1 style="color: blue">Bổ sung thông tin cá nhân.</h1>
<a href="userIndex.php"><button>Hủy</button></a>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" pattern="\w\s\{2,50}$" title="Tối đa 50 ký tự." placeholder="Nhập tên"></td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><input type="text" name="dob" placeholder="Nhập ngày sinh"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" pattern="^[a-z]\w[^A-Z]?=\@{50}$" title=" Sai ngữ pháp !" placeholder="Nhập email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="phone" pattern="^[0+]\d{9,11}$" title="Số điện thoại daif từ 10 -12 số." placeholder="Nhập số điện thoại"></td>
        </tr>
        <tr>
            <td>ID Card</td>
            <td><input type="text" name="idCard" pattern="\d{9,12}$" title="ID có 9 - 12 số." placeholder="Nhập số CMNN"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Thêm</button></td>
        </tr>
    </table>
</form>
</body>
</html>

