<?php if(isset($_SESSION["dadangnhap"]) && $_SESSION["dadangnhap"]==true){
     header("Location: ../view/index.php");
} ?>
<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="UTF 8">
    <meta name="viewprot" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d8c044adae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ivt-Project</title>      
</head>
<body>
<?php include "../masterPage/menu.php" ?>
    <section class="cart">
        <div id="wrapper">
            <form action="../Controller/userController.php?action=dangnhap" method="POST" id="form-login">
                <?php
                if(isset($_SESSION["dangnhap"])&& $_SESSION["dangnhap"]==false){   
                    ?>
                       <h1 style="color: red;" class="form-heading" >TÀI KHOẢN HOẶC MẬT KHẨU KHÔNG ĐÚNG</h1>
                    <?php
                   
                }
                $_SESSION["dangnhap"]=true;
                ?>
               
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" name="taiKhoan" class="form-input" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input name="matKhau" type="password" class="form-input" placeholder="Mật khẩu">
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>
                <a href="../Controller/userController.php?action=dangnhap">
                <input type="submit" value="Đăng nhập" class="form-submit">
                </a>
                
                 <a href="../View/Signup.php"> Đăng ký khi chưa có tài khoản </a>
            </form>
                
            
        </div>
    </section>
    <!-- <footer> -->
    <?php include "../masterPage/footer.php" ?>
        
    </body>
    <script src="./js/js.js"></script>
    </html>