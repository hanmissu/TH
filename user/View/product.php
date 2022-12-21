<?php include_once "../model/productModel.php" ?>
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
    <div class="product">
        <div class="container">

            <div class="product-content row">
                <div class="product-content-left row">
                    <?php
                    $idProc = $_GET['id'];
                    $product = new productModel($idProc, "", "", "", "", "", "", "", "");
                    $dataProc = $product->getData($idProc);
                    ?>
                    <div class="product-content-left-big-img">
                        <img src="../../img/<?php echo $dataProc["anh"] ?>" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="images/anh1.jpg" alt="">
                        <img src="images/anhlogo2.jpg" alt="">
                        <img src="images/anh3.jpg" alt="">
                        <img src="images/anh4.jpg" alt="">
                    </div>
                    <?php
                    ?>

                </div>

                <div class="product-content-right ">
                    <?php
                    $idProc = $_GET['id'];
                    $product = new productModel($idProc, "", "", "", "", "", "", "", "");
                    $dataProc = $product->getData($idProc);
                    ?>
                    <form action="../Controller/CartController.php?action=add&id=<?php echo $idProc ?>" method="POST">
                    <div class="product-content-right-product-name">
                        <h1><?php echo $dataProc["tenGiay"] ?></h1>
                        <p>MSP: <?php echo $dataProc["maGiay"] ?></p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?php echo number_format($dataProc["gia"]) ?><sup>đ</sup></p>
                    </div>
                    <p style="color: red;">Vui lòng chọn size</p>
                    <div class="product-content-right-product-size">
                        <select name="size" class="custom-select tm-select-accounts">
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                        <p style="font-weight: bold;">Size</p>

                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng</p>
                        <input name=number type="number" min="1" max="10" value="1">

                    </div>

                    <div class="product-content-right-product-button">

                        <a href="../Controller/CartController.php?action=add&id=<?php echo $idProc ?>"> <button><i class="fas fa-shopping-cart"></i>
                                <p>Mua HÀNG</p>
                            </button></a>
                    </div>

                    <div class="product-content-right-bottom">

                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item chitiet">
                                    <p>giới thiệu</p>
                                </div>
                                <!-- <div class="product-content-right-bottom-content-title-item baoquan">
                                        <p>Chi tiết</p>
                                    </div> -->
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-chitiet">
                                    <?php echo $dataProc["moTa"] ?>

                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                    ?>
</form>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer> -->
    <?php include "../masterPage/footer.php" ?>

</body>
<script src="./js/js.js"></script>

</html>