<?php
session_start();
include_once "../model/orderModel.php";
include_once "../util/MySQLConnet.php";
$product = $_SESSION["cart"];

$maKH = isset($_SESSION["maKH"]) ? $_SESSION["maKH"] : "";
$tenKH = isset($_POST["tenKh"]) ? $_POST["tenKh"] : "";
$sdt = isset($_POST["sdt"]) ? $_POST["sdt"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$diaChi = isset($_POST["diaChi"]) ? $_POST["diaChi"] : "";
$ngayXuatDon = date('d-m-Y');

$tongTien = isset($_SESSION['sum']) ? $_SESSION['sum'] : 0;

$order = new orderModel(0, $ngayXuatDon, $tenKH, 0, $diaChi, $tongTien);
try {
    
    $order->inssertorder();
    $idorderLastInsert= $order->getDataLastInsert();
    
    unset($_SESSION['cart']);
    header("Location: ../view/cart.php");

    $_SESSION["thanhToan"] = true;
} catch (\Throwable $th) {
    $_SESSION["thanhToan"] = false;
}

