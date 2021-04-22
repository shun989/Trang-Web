<?php
session_start();
if (isset($_SESSION['userName'])){
    echo "Welcome  " . $_SESSION['userName'];
}else{
    header('location: index.php');
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
<h1>Hello world !</h1>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['logOut'])){
        session_destroy();
        header('location: index.php');
    }
}
