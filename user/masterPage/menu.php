<?php session_start(); ?>
<?php include_once "../model/categoryModel.php"; ?>
<header>
    <a href="../View/index.php">
        <div class="logo">
            <img src="images/logo4.PNG">
        </div>
    </a>
    <div class="menu">
        <form class="menu" action="">
            <?php
            $cate = new categoryModel(0, "");
            $data = $cate->getAllCagetory();
            for ($i = 0; $i < count($data); $i++) {
            ?>
                <li><a href="../View/category.php?idCate=<?php echo $data[$i]['maLoaiGiay'] ?>"><?php echo $data[$i]["tenLoai"] ?></a>
                </li>
            <?php
            }
            ?>

            <li><a href="#">SALE</a></li>
            <li><a href="#">THÔNG TIN</a></li>
            <li><a href="../View/allProduct.php">TẤT CẢ SẢN PHẨM</a></li>
            <li><a href="../Controller/CartController.php?actionClear=clear">XÓA GIỎ HÀNG</a></li>

        </form>
        <?php
        if (isset($_SESSION["tenKH"]) && $_SESSION["dangnhap"] == true) {
        ?>
            <script type='text/javascript'>
                alert('Chào mừng bạn <?php echo $_SESSION["tenKH"]; $_SESSION["dangnhap"] = false;  $_SESSION['dadangnhap'] = true ?>');
            </script>
        <?php
        }
        if(isset($_SESSION["thanhToan"]) &&  $_SESSION["thanhToan"]==true){
            ?>
            <script type='text/javascript'>
                alert('Thanh toán thành công <?php  $_SESSION["thanhToan"] = false;?>');
            </script>
        <?php
        }
        ?>
    </div>

    <div class="other">
     
        <li>
            <form action="../Controller/ProductController.php?actionTimKiem=timkiem" method="POST">
            <input placeholder="tìm kiếm" name="timkiem" type="text">
            <a href="../Controller/ProductController.php?actionTimKiem=timkiem"><i class="fas fa-search"></i></a>
            </form>
    
      </li>
        <?php
        if (isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap'] == true) {
        ?>
            <li> <a class="fa fa-user" href="../View/infomation.php"></a></li>
        <?php
        } else {
        ?>
            <li> <a class="fa fa-user" href="../View/login.php"></a></li>
        <?php
        }

        if (!empty($_SESSION['cart'])) {
        ?>
            <li> <a class="fa fa-shopping-bag" href="../View/cart.php"></a><?php echo count($_SESSION['cart']) ?></li>
        <?php
        } else {
        ?>
            <li> <a class="fa fa-shopping-bag" href="../View/cart.php"></a></li>
        <?php
        }
        ?>
    </div>
</header>