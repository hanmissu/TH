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
   <section class="payment" >
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
      </div>   <div class="container">
        <div class="payment-content row">
            <div class="payment-content-left">
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
                        <img src="inmages/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input type="radio">
                        <label for="">Thanh toán bằng MoMo</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="inmages/momo.PNG" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán khi nhận hàng</label>
                    </div>
                    
                    
                </div>
            </div>
            <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã giảm giá">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-payment">
                    <button>TIẾP TỤC THANH TOAN</button>
                </div>
            </div>
            
        </div>
   </section>
    


<!-- <footer> -->
<?php include "../masterPage/footer.php" ?>
    
</body>
<script src="./js/js.js"></script>
</html>
