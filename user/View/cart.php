
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
                    <tr>
                        <td><img src="inmages/giaysuperstar.jpeg" alt=""></td>
                        <td><p>giaysuperstar</p></td>
                        <td><p>41</p></td>
                        <td><input type="number"value="1" min="1"></td>
                        <td><p>1.000.000 <sub>đ</sub></p></td>
                        <td><span>X</span></td>
                    </tr>
                    <tr>
                        <td><img src="inmages/anh3.jpg" alt=""></td>
                        <td><p>combo giàu siêu rẻ</p></td>
                        <td><p>41</p></td>
                        <td><input type="number"value="1" min="1"></td>
                        <td><p>1.000.000 <sub>đ</sub></p></td>
                        <td><span>X</span></td>
                    </tr>
                    
                </table>
            </div>  
            <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">Tổng tiền giỏ Hàng</th>
                        </tr>
                        <tr>
                            <td>Tổng sản phẩm</td>
                            <td>2</td>
                            <tr>
                                <td>Tổng tiền</td>
                                <td><p>1.000.000 <sub>đ</sub></p></td>
                            </tr>
                            <tr>
                                <td>Tạm tính</td>
                                <td><p style="color: black; font-weight: bold;">1.000.000 <sub>đ</sub></p></td>
                            </tr>
                        </tr>
                    </table>
                    <div class="cart-content-right-button">
                        <button> TIẾP TỤC MUA SẮM</button>
                        <button>THANH TOÁN</button>
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
