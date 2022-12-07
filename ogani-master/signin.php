<!DOCTYPE html>
<html lang="zxx">

<?php include "masterPage/head.php" ?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php include "masterPage/menu.php" ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php include "masterPage/header.php" ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php include "masterPage/hero_No_img.php" ?>
    <!-- Hero Section End -->

     <!-- Sign In Start -->
     <form action="./Controller/userController.php" method="POST">
        <div class="container-fluid">
               <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                   <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                       <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                           <div class="d-flex align-items-center justify-content-between mb-3">
                               <a href="index.html" class="">
                                   <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>OGARI</h3>
                               </a>
                               <h3>Sign In</h3>
                           </div>
                           <div class="form-floating mb-3">
                               <input type="text" class="form-control" id="floatingInput" name="user_name"  placeholder="User name">
                               <label for="floatingInput">User name</label>
                           </div>
                           <div class="form-floating mb-4">
                               <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                               <label for="floatingPassword">Password</label>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mb-4">
                               <div class="form-check">
                                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Check me out</label>
                               </div>
                               <a href="">Forgot Password</a>
                           </div>
                           <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                           <p class="text-center mb-0">Don't have an Account? <a href="./signup.php">Sign Up </a></p>
                       </div>
                   </div>
               </div>
           </div>
         </form>
        <!-- Sign In End -->

    <!-- Footer Section Begin -->
    <?php include "masterPage/footer.php" ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>