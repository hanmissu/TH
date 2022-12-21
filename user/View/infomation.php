<?php session_start() ;
include "../model/userModel.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d8c044adae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styleInfo.css">
</head>

<body>

    </header>
    <?php
    $taiKhoan = $_SESSION["taiKhoan"];
    $user= new userModel(0,"","","",$taiKhoan,"");
    $data= $user->getData();
    ?>
    <main>
        <header>
            <a href="./index.php"><img src="./images/logo4.PNG"></a>

            <h1><?php echo $data["taiKhoan"]  ?></h1>
        </header>
        <ul>
          
            <div class="ma">
                <p><?php Tên: echo $data["tenKH"] ?></p>
            </div>
            <div class="ma">
                <p>SDT: <?php echo $data["SDT"] ?></p>
            </div>
            <div class="ma">
                <a href="https://www.facebook.com/profile.php?id=100014742612458">
                    <p>Email: <?php echo $data["email"] ?></p>
                </a>
            </div>
     
<a href="../Controller/userController.php?actionDangXuat=dangxuat"><button>Đăng xuất</button></a>
            
<a href="../Controller/orderController.php?actionView=view"><button>Xem đơn hàng</button></a>
        </ul>
    </main>
    <?php
    ?>


</body>

</html>