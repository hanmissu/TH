<?php include_once "../model/userModel.php" ?>
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

    <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-cart payment-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="payment-top-adress payment-top-item">
                        <i class="fas fa-map-marker-alt "></i>
                    </div>
                    <div class="payment-top-payment payment-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <?php
                    $user = new userModel("","","","", $_SESSION["taiKhoan"],"");
                    $userData = $user->getData();
                    
                    ?>
                    <form action="../Controller/orderController.php" method="POST">

                    <label for="psw"><b>Họ tên:</b></label>
                    <input type="text" placeholder="Họ tên" name="tenKh" value="<?php echo $userData["tenKH"] ?>" required>
                    <label for="psw"><b>Số điện thoại</b></label>
                    <input type="text" placeholder="Số điện thoại" value="<?php echo $userData["SDT"] ?>" name="sdt" required>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Nhập Email" value="<?php echo $userData["email"] ?>"  name="email" required>
                    <label for="email"><b>Địa chỉ</b></label>
                    <input type="text" placeholder="Nhập địa chỉ" name="diaChi" required>
                    
                    <div class="payment-content-right-payment">
                        <a href="../Controller/orderController.php">
                            <button>TIẾP TỤC THANH TOAN</button>
                        </a>

                    </div>
                    </form>
                    
                    <?php
                    ?>

                    <div class="payment-content-left-method-belivery">
                        <p style="font-weight: bold;">Phương Thức giao hàng</p>
                        <div class="payment-content-left-method-belivery-item">
                            <input type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tính dụng sẽ không bao giờ được lưu lại</p>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="">Thanh toán bằng thẻ tính tính(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="images/visa.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="">Thanh toán bằng MoMo</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="images/momo.PNG" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán khi nhận hàng</label>
                        </div>


                    </div>
                </div>

                <div class="payment-content-right">
                    <div class="cart-content-left">
                        <table>
                            <tr>
                                <th> Sản Phẩm</th>

                                <th> Size</th>
                                <th> Số lượng</th>
                                <th> Thành Tiền</th>

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
                                            <a href="./product.php?id=<?php echo $pro["maGiay"] ?>"><img style="width: 100px; height: 100px;" src="../../img/<?php echo $pro["anh"] ?>" alt="" ></a>

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


                                    </tr>
                            <?php
                                }
                            }

                            ?>


                        </table>
                    </div>
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá">
                        <button><i class="fas fa-check"></i></button>
                        
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
      
              
                </div>

                </div>

            </div>
    </section>



    <!-- <footer> -->
    <?php include "../masterPage/footer.php" ?>

</body>
<script src="./js/js.js"></script>

</html>