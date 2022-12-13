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

    </section>
    <form action="" >
        <div class="container">
          <h1>Form Đăng Ký</h1>
          <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
          <hr>
         <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Nhập Email" name="email" required>
         <label for="psw"><b>Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Mật Khẩu" name="psw" required>
         <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required>
         <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
          </label>
         <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>

<!-- <footer> -->
    <div class="footer-top">
        <li><a href=""><img src="inmages/logoSaleNoti.png" alt=""></a></li>
        <li><a href=""></a>Liên Hệ</li>
        <li><a href=""></a>Tuyển dụng</li>
        <li><a href=""></a>Giới thiệu</li>
        <li>
            <a href=""class="fab fa-facebook-f"></a>
            <a href=""class="fab fa-twitter"></a>
            <a href=""class="fab fa-youtube"></a>
        </li>
    </div>
    <div class="footer-center">
        <p>
    Công ty TNHH Sản xuất thương mại dịch vụ MWC<br>
    Địa chỉ: Số 7 đường 3A, khu dân cư Ấp 5, X. Phong Phú, H. Bình Chánh., Tp. HCM<br>
    MST: 0833012475
        </p>
    </div>
        
</body>
<script src="./js/js.js"></script>
</html>
