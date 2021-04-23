<?php
session_start();
include_once "fileClass/UserInformation.php";
include_once "fileClass/UserInformationManager.php";
include_once "fileClass/UserManager.php";
$userInformationManager = new UserInformationManager('user_information/userData.json');
$userInformation = $userInformationManager->getUserInformationById($_GET['id']);

?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $idCard = $_POST['idCard'];

    $data = $userInformationManager->loadDataFile();

    foreach ($data as $item) {
        if ($item->id == $_GET["id"]) {
            $item->name = $name;
            $item->dob = $dob;
            $item->address = $address;
            $item->email = $email;
            $item->phone = $phone;
            $item->idCard = $idCard;
        }
    }

    $userInformationManager->saveDataToFile($data);
    echo "Cập nhật thông tin thành công.";
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
    input {
        height: 25px;
    }

</style>
<body>
<h1 style="color: blue">Thay đổi thông tin user</h1>

<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" pattern="\w\s\{2,50}$" title="Tối đa 50 ký tự." placeholder="Nhập tên">
            </td>
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
            <td><input type="email" name="email" pattern="^[a-z]\w[^A-Z]?=\@{50}$" title="Cú pháp abc@xyz."
                       placeholder="Nhập email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="phone" pattern="^[0+]\d{9}$" title="Số điện thoại có 9 - 12 số."
                       placeholder="Nhập số điện thoại"></td>
        </tr>
        <tr>
            <td>ID Card</td>
            <td><input type="text" name="idCard" pattern="\d{9,12}$" title="ID có 9 - 12 số."
                       placeholder="Nhập số CMNN"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Thay đổi</button>
                <a href="userIndex.php">
                    <button>Hủy</button>
                </a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>


