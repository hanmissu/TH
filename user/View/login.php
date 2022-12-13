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
            <form action="" id="form-login">
                <h1 class="form-heading">Form đăng nhập</h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" class="form-input" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-input" placeholder="Mật khẩu">
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>
                <input type="submit" value="Đăng nhập" class="form-submit">
                <input type="submit" value="Đăng ký" class="form-submit">
            </form>
            </form>
        </div>
    </section>
    <!-- <footer> -->
    <?php include "../masterPage/footer.php" ?>
        
    </body>
    <script src="./js/js.js"></script>
    </html>