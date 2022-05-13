<!--- PHP ---->

<?php
include('config.php');
?>

<!--- End PHP --->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- -------------css------------- -->
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- -------------font------------- -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- -------------fontawsome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">
    <title>Gameinfluer</title>

</head>
<body class="w">

<style>
  .popbut {
    border: 2px solid black;
    border-radius: 10px;
    font-size: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    color: black;
    background: none;
    transition-duration: 0.6s;
    width: 80%;
}

.popbut:hover {
    background: black;
    color: white;
}
</style>

<div class="container">

    <?php
      if(isset($_SESSION['successMsg']))
      {
    ?>
      <p style="color:green"><?php echo $_SESSION['successMsg']; ?></p>
    <?php
        unset($_SESSION['successMsg']);
      }
        if(isset($_SESSION['errorMsg']))
      {
    ?>
      <p style="color:red"><?php echo $_SESSION['errorMsg']; ?></p>
    <?php
        unset($_SESSION['errorMsg']);
      }
    ?>

  <!-- Navbar -->

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="https://sv1.picz.in.th/images/2022/01/28/nVtqzk.png" width="40" height="30" alt="">
        <a class="navbar-brand">GAMEINFLUER</a>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->

  <!-- Form -->

  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 col-sm-8 col-xl-12 col-lg-12 col-md-12 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title colabout">&nbsp; ลงทะเบียนแอดมิน</h2>
          <input>

            <form method="POST" action="submit3.php">

              <div class="row row-space">
                <div class="col-12">
                  <div class="form-group">
                    <label for="email">สร้างบัญชี</label>
                    <input type="email" class="input--style-4" id="email" placeholder="ใส่อีเมล .." name="email">
                  </div>
                </div>

                <div class="col-12">
                  <div class="input-group">
                    <input class="input--style-4" id="pwd" type="password" name="pswd" placeholder="ใส่รหัสผ่าน ...">
                  </div>
                </div>

                <input>

                <div class="col-12">
                  <div class="input-group">
                    <label class="label">ชื่อ-สกุล</label>
                    <input class="input--style-4" type="text" id="name" name="name" placeholder="ใส่ชื่อและสกุลของคุณ ...">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="email">เบอร์โทรติดต่อ</label>
                    <input type="text" class="input--style-4" id="phone" placeholder="ใส่เบอร์โทรมือถือของคุณ ..." name="contact_no">
                  </div>
                </div>

              </div> <br><br>

              <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block sub" style="border-radius: 50px;">ยืนยันลงทะเบียน</button>
            </form>
            <br>
          <hr>

          <h6 style="text-align: center;">หากสมัครบัญชีแล้ว กดปุ่มเพื่อเข้าสู่ระบบ</h6>
          <div style="height:10px;"></div>
          <div style="">
            <a href="admin_login.php" class="btn btn-secondary popbut" type="submit" style="margin-left:55px;">เข้าสู่ระบบแอดมิน</a>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Form -->

  <div style="padding:150px"></div>

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