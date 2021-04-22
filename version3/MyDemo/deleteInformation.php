<?php

include_once "fileClass/UserInformation.php";
include_once "fileClass/UserManager.php";
include_once "fileClass/UserInformationManager.php";

$index = $_REQUEST['id'];
$userInformationManager = new UserInformationManager('user_information/userData.json');
$userInformationManager->remove($index);
echo "Đã xóa thành công.";
header('refresh:1,url=userIndex.php');