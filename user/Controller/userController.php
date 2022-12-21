<?php
session_start();
include '../model/userModel.php';

$tenKH=isset($_POST['tenKh'])?$_POST['tenKh']:"";
$sdt = isset($_POST['sdt'])?$_POST['sdt']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$taiKhoan = isset($_POST['taiKhoan'])?$_POST['taiKhoan']:"";
$matKhau = isset($_POST['matKhau'])?$_POST['matKhau']:"";
$rePws = isset($_POST['psw-repeat'])?$_POST['psw-repeat']:"";

$action = isset($_GET['action'])?$_GET['action']:'';
$user = new userModel(0, $tenKH, $sdt, $email, $taiKhoan, $matKhau);
$data=$user->getData();


$actionDangXuat= isset($_GET["actionDangXuat"])?$_GET["actionDangXuat"]:"";
if($action=="dangnhap"){
    $_SESSION["taiKhoan"]=$data["taiKhoan"];
    $_SESSION["maKH"]=$data["maKH"];
    if($data['taiKhoan']==$taiKhoan && $data['matKhau']==$matKhau){
        $_SESSION["dangnhap"]=true;
        $_SESSION["tenKH"]=$data["tenKH"];
        $_SESSION["taiKhoan"]=$data["taiKhoan"];
        header("Location: ../View/index.php");
    }
    else{
        $_SESSION["dangnhap"]=false;
        header("Location: ../View/login.php");
    }
}
if($action=="dangky"){
    if ($matKhau == $rePws){
        $user->inssertUser();
        $_SESSION["psw-repeat"]=true;
        $_SESSION["dangky"]=true;
        header("Location: ../View/Signup.php");
    }
    else{
        $_SESSION["dangky"]=false;
        $_SESSION["psw-repeat"]=false;
        header("Location: ../View/Signup.php");
    }
}
if($actionDangXuat=="dangxuat"){
 
    session_destroy();
    header("Location: ../view/index.php");
}