<?php
include '../model/userModel.php';
$a = new userModel($_POST['user_name'], $_POST['password']);
$a->inssertUser();
?>
