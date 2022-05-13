<!------- PHP --------->

<?php
include('config.php');
?>

<!------- End PHP --------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------bootstrap------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- -------------fontawsome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- -------------css------------- -->
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>Gameinfluer</title>
    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="padding-left:20px;">
      <a class="navbar-brand" style="padding:10px;"; href="index1.php">
        <img src="https://sv1.picz.in.th/images/2022/01/28/nVtqzk.png" width="40" height="30" alt="">
      </a>
      <a href="index1.php" class="navbar-brand">GAMEINFLUER</a>
    </div>
  </div>
</nav>

<!-- End Navbar -->

<!-- Form -->

<div class="container"> <br><br><br>
  <div class="box1">
        <div class="row">
                <h2 style="text-align: center;">เข้าสู่ระบบ</h2> <br>

                <div class="col-lg-6">
                    <a href="login1.php" type="submit" name="" class="btn btn-dark btn-lg btn-block sub"><i class="fas fa-gamepad"></i>&nbsp; อินฟลูเอนเซอร์</a>
                </div>

                <div class="col-lg-6">
                    <a href="login2.php" type="submit" name="" class="btn btn-dark btn-lg btn-block sub"><i class="fas fa-briefcase"></i>&nbsp; แบรนด์ / เอเจนซี่</a>
                </div>
        </div>
        <br>
        <hr>
        <div class="row">
                <h3 style="text-align: center;">หากยังไม่ได้สมัครบัญชี เลือกที่ต้องการสมัคร</h3> <br>

                <div class="col-lg-6">
                    <a href="register.php" type="submit" name="" class="btn btn-dark btn-lg btn-block popbut2" style="margin-left:70px;">อินฟลูเอนเซอร์</a>
                </div>

                <div class="col-lg-6">
                    <a href="register_brand.php" type="submit" name="" class="btn btn-dark btn-lg btn-block popbut2" style="margin-right:70px;">แบรนด์ / เอเจนซี่</a>
                </div>
    </div>
</div>
</div>

<!-- End Form -->

<div style="padding:200px"></div>

<!-- Footer -->

<footer>
 <div class="waves">
    <div class="wave" id="wave1"></div>
    <!-- <div class="wave" id="wave2"></div>
    <div class="wave" id="wave3"></div>
    <div class="wave" id="wave4"></div> -->
  </div>
    <ul class="social_icon">
      <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    </ul>
      <p>© 2022 Gameinfluer. All Rights Reserved</p>
</footer>

<!-- End Footer -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>