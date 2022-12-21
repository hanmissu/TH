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
   
    <form action="../Controller/userController.php?action=dangky" method="POST">
        <div class="container">
          <h1>Form Đăng Ký</h1>
          <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
          <hr>
          
          <label for="psw"><b>Họ tên:</b></label>
          <input type="text" placeholder="Họ tên" name="tenKh" required>
          <label for="psw"><b>Số điện thoại</b></label>
          <input type="text" placeholder="Số điện thoại" name="sdt" required>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Nhập Email" name="email" required>
          <label for="email"><b>Tên đăng nhập</b></label>
          <input type="text" placeholder="Tên đăng nhập" name="taiKhoan" required>

          <label for="psw"><b>Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Mật Khẩu" name="matKhau" required>
        
         <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required>
         
         <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
          </label>
         <div class="clearfix">
          <a href="../Controller/userController.php?action=dangky">
          <button type="submit" class="signupbtn">Sign Up</button>
          </a>
           
          </div>
        </div>
      </form>
  
      <?php include "../masterPage/footer.php" ?>
    
    </body>
    <script src="./js/js.js"></script>

</html>
