<?php
session_start();
if (isset($_SESSION['userName'])){
    echo "Hello  " . $_SESSION['userName'];
}else{
    header('location: index.php');
}
?>
<?php
include_once "fileClass/User.php";
include_once "fileClass/UserManager.php";
include_once "fileClass/UserInformation.php";
include_once "fileClass/UserInformationManager.php";
$userManager = new UserManager('data.json');
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

    form {
        margin: 20px;
        float: right;
    }
</style>
<body>
<form method="post">
    <button type="submit" onclick="return confirm('Are you want log uot?')" name="logOut">Đăng xuất</button>
</form>
</div>
<div class="container">
    <h1 style="color: blue">Danh sách thành viên</h1>
    <a href="addInformation.php"><button style="font-size: 20px; padding: 10px 20px; background-color: deepskyblue">Thêm  thông tin thành viên.</button></a>
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
            <th colspan="2">Tùy chọn</th>
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
                <td><a onclick="return confirm('Are you want delete?')"
                       href="deleteInformation.php?id=<?php echo $key ?>"><button>Delete</button></a></td>
                <td><a onclick="return confirm('Are you want edit?')"
                       href="editInformation.php?id=<?php echo $userInformation->getId() ?>"><button>Edit</button></a></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['logOut'])){
        session_destroy();
        header('location: index.php');
        }

}
