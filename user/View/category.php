<?php 
include "../model/productModel.php"
?>
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
    <section id="silder" >
      
    
    </section>
    <section class="cartegory">

        <div class="container">
            <div class="row">
            <div class="cartegory-left">
                <ul>
                    <li class="cartegory-left-li"><a href="#">NỮ</a>
                        <ul>
                            <li><a href="">HÀNG NỮ MỚI VỀ</a></li>
                            <li><a href="">Giày Thể Thao</a></li>
                            <li><a href="">Giày Cao GÓt</a></li>
                            <li><a href="">Dép Nữ</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="#">NAM</a>
                        <ul>
                            <li><a href="">HÀNG NAM MỚI VỀ</a></li>
                            <li><a href="">Giày Thể Thao</a></li>
                            <li><a href="">Giày SANDAL</a></li>
                            <li><a href="">Dép NAM</a></li>
                        </ul>
                    </li>
                        
                    <li class="cartegory-left-li"><a href="#">TRẺ EM</a>
                    <ul>
                        <li><a href="">HÀNG TRẺ EM MỚI VỀ</a></li>
                        <li><a href="">Giày Thể Thao</a></li>
                        <li><a href="">Giày SANDAL</a></li>
                        <li><a href="">Dép TRẺ EM</a></li>
                    </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="">BỘ SƯU TẬP</a></li>
                </ul>
            </div>
            <div class="cartegory-right ">
                <div class="cartegory-right-top-item">
                    <p>HÀNG NỮ MỚI VỀ</p>
                </div>

                <!-- <div class="cartegory-right-top-item">
                    <select name="" id="">
                        <option value="">Sắp xếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao</option>
                    </select>
                </div> -->
                <div class="cartegory-right-content row">
                <form class="cartegory-right-content row" action="../Controller/ProductController.php" method="POST">
                <?php
                    $product= new productModel("","","","","","","","");
                    $data=$product->getAllProduct();
                    for ($i = 0; $i < count($data); $i++) {
                    ?>
                        <div class="cartegory-right-content-item">
                            <img src="inmages/<?php echo $data[$i]['anh'] ?>" alt="Lỗi">
                            <h1><?php echo $data[$i]['tenGiay'] ?> </h1>
                            <p><?php echo $data[$i]['gia'] ?><sup>đ</sup></p>
                        </div>
                    <?php
                    }
                    ?> 
                </form>
      
                </div>
                
                <div class="cartegory-right-bottom row">
                    <div class="cartegory-right-bottom-items">
                        <p>Hiện thị 2 <span>|</span>5 sản phẩm</p>
                    </div>
                    <div class="cartegory-right-bottom-items">
                     <p><span>&#171;</span>1 2 3 4<span>&#187;</span>Trang cuối</p>
                    </div>
                </div>

                
            </div>               
        </div>
    </div>

    <!-- <footer> -->
    <?php include "../masterPage/footer.php" ?>
        
</body>
<script src="./js/js.js"></script>
</html>
