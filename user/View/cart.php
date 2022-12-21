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
    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="cart-top-adress cart-top-item">
                        <i class="fas fa-map-marker-alt "></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th> Sản Phẩm</th>
                            <th> Tên Sản Phẩm</th>
                            <th> Size</th>
                            <th> Số lượng</th>
                            <th> Thành Tiền</th>
                            <th> Xóa</th>
                        </tr>
                        <?php
                        $_SESSION['sum'] = 0;
                        $product = isset($_SESSION["cart"]) ? $_SESSION["cart"] : "";
                        if ($product == "") {
                        ?>
                            <h1>GIỎ HÀNG TRỐNG</h1>
                            <?php
                        } else {
                            foreach ($product as $pro) {
                                $num = $_SESSION['number'][$pro["maGiay"]];
                                $size = $_SESSION['size'][$pro['maGiay']];
                            ?>
                                <tr>
                                    <td>
                                        <a href="./product.php?id=<?php echo $pro["maGiay"] ?>"><img src="../../img/<?php echo $pro["anh"] ?>" alt=""></a>

                                    </td>
                                    <td>
                                        <a href="./product.php?id=<?php echo $pro["maGiay"] ?>">
                                            <p><?php echo $pro["tenGiay"] ?></p>
                                        </a>
                                    </td>
                                    <td>
                                        <p><?php echo $size ?></p>
                                    </td>
                                    <td><input disabled id="number" type="number" value="<?php echo $num ?>"></td>
                                    <td>
                                        <p><?php echo number_format($pro["gia"] * $num);
                                            $_SESSION['sum'] += $_SESSION["tongTien"][$pro["maGiay"]] = $pro['gia'] * $num;
                                            ?><sub>đ</sub></p>
                                    </td>
                                    <td>
                                        <a href="../Controller/CartController.php?action=delete&idDel=<?php echo $pro["maGiay"] ?>"><span>X</span></a>

                                    </td>

                                </tr>
                        <?php
                            }
                        }

                        ?>
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">Tổng tiền giỏ Hàng</th>
                        </tr>
                        <tr>
                            <?php
                            if (empty($_SESSION["cart"])) {
                            ?>
                                <td>Tổng sản phẩm</td>
                                <td>0</td>
                        <tr>
                            <td>Tổng tiền</td>
                            <td>
                                <p> 0<sub>đ</sub></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td>
                                <p style="color: black; font-weight: bold;">0 <sub>đ</sub></p>
                            </td>
                        </tr>



                        </tr>

                    <?php

                            }
                    if (!empty($_SESSION["cart"])) {
                    ?>
                        <td>Tổng sản phẩm</td>
                        <td><?php echo count($_SESSION['cart']) ?></td>
                        <tr>
                            <td>Tổng tiền</td>
                            <td>
                                <p><?php echo  number_format($_SESSION['sum']); ?> <sub>đ</sub></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td>
                                <p style="color: black; font-weight: bold;"><?php echo  number_format($_SESSION['sum']); ?> <sub>đ</sub></p>
                            </td>
                        </tr>

                        </tr>
                    <?php
                            }
                    ?>

                    </tr>
                    </table>
                    <div class="cart-content-right-button">
                        <a href="../View/allProduct.php"><button> TIẾP TỤC MUA SẮM</button></a>
                        <?php
                        if (isset($_SESSION['dadangnhap']) && $_SESSION['dadangnhap'] == true) {
                        ?>
                            <a href="../View/payment.php"> <button>THANH TOÁN</button> </a>

                        <?php
                        } else {
                        ?>
                            <a href="../View/login.php"> <button>THANH TOÁN</button> </a>

                        <?php
                        }

                        ?>

                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p> TÀI KHOẢN</p>
                        <p>Hãy <a href="">Đăng Nhập</a> tài khoản của bạn để tích điểm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <footer> -->
    <?php include "../masterPage/footer.php" ?>

</body>
<script src="./js/js.js"></script>

</html>