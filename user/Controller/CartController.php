<?php
session_start();
include_once "../model/cartModel.php";
include_once "../model/productModel.php";
$action = isset($_GET['action']) ? $_GET['action'] : '';
$idProduct = isset($_GET['id']) ? $_GET['id'] : "";
$actionClear = isset($_GET['actionClear']) ? $_GET['actionClear'] : "";
$actionCheck = isset($_GET['check']) ? $_GET['check'] : "";
$number = isset($_POST['number']) ? $_POST['number'] : "";
$size = isset($_POST['size']) ? $_POST['size'] : "";
$_SESSION['number'][$idProduct] = $number;
$_SESSION['size'][$idProduct] = $size;


$actionDelete = isset($_GET["action"]) ? $_GET["action"] : "";
$idDelete= isset($_GET['idDel'])?$_GET['idDel']:"";

if ($action == "add") {
    $product = new productModel($idProduct, "", "", "", "", "", "", "", 1);
    $data = $product->getData($idProduct);

    if (!empty($_SESSION["cart"])) {
        if (array_key_exists($idProduct, $_SESSION["cart"])) {
            $soLuong = $_SESSION["cart"][$idProduct]["soLuong"];
            $_SESSION["cart"][$idProduct]["soLuong"] = $soLuong + 1;
        } else {
            $_SESSION["cart"][$idProduct] = $data;
        }
    } else {
        $_SESSION["cart"][$idProduct] = $data;
    }

    header("Location: ../view/cart.php");
}
if ($actionClear == "clear") {
    unset($_SESSION["cart"]);
    session_destroy();
    header("Location: ../view/index.php");
}
if ($actionDelete == "delete") {
    unset($_SESSION['cart'][$idDelete]);
    header("Location: ../view/cart.php");
}
