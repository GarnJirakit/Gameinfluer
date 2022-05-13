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
/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}
</style>

<div class="container">

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
                    <h2 class="title colabout">&nbsp; สั่งซื้อตั๋ว</h2>
                    <input>

                    <form method="POST" action="submit_ticket.php">

                        <div class="col-12">
                            <div class="input-group">
                                <!-- <input type="radio" name="ticket" value="1"/><img src="images/ticket1.png" width="30" height="30" alt="">&nbsp; ชุดที่ 1 [ 1 ตั๋ว | 1 บาท ]
                                <input type="radio" name="ticket" value="2"/><img src="images/ticket2.png" width="30" height="30" alt="">&nbsp; ชุดที่ 2 [ 5 ตั๋ว | 5 บาท ]
                                <input type="radio" name="ticket" value="3"/><img src="images/ticket3.png" width="30" height="30" alt="">&nbsp; ชุดที่ 3 [ 20 ตั๋ว | 20 บาท ]
                                <input type="radio" name="ticket" value="4"/><img src="images/ticket4.png" width="30" height="30" alt="">&nbsp; ชุดที่ 4 [ 50 ตั๋ว | 50 บาท ] -->
                                <label>
                                    <input type="radio" name="ticket" value="1" checked>
                                    <img src="images/ticket1.png" style="width:200px; height:200px;">
                                    <br>
                                    <br>
                                    <h5 class="card-title" style="text-align: center;">ตั๋ว 1 ใบ</h5>
                                    <p class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 1 THB</p>
                                    </label>

                                    <label>
                                    <input type="radio" name="ticket" value="2">
                                    <img src="images/ticket2.png" style="width:200px; height:200px;">
                                    <br>
                                    <br>
                                    <h5 class="card-title" style="text-align: center;">ตั๋ว 5 ใบ</h5>
                                    <p class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 5 THB</p>
                                    </label>

                                    <label>
                                    <input type="radio" name="ticket" value="3">
                                    <img src="images/ticket3.png" style="width:200px; height:200px;">
                                    <br>
                                    <br>
                                    <h5 class="card-title" style="text-align: center;">ตั๋ว 20 ใบ</h5>
                                    <p class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 20 THB</p>
                                    </label>

                                    <label>
                                    <input type="radio" name="ticket" value="4">
                                    <img src="images/ticket4.png" style="width:200px; height:200px;">
                                    <br>
                                    <br>
                                    <h5 class="card-title" style="text-align: center;">ตั๋ว 50 ใบ</h5>
                                    <p class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 50 THB</p>
                                    </label>
                            </div>
                        </div>

                        <hr>
                        <h3 class="title colabout">จ่ายด้วยบัตรเครดิต/เดบิต</h3> 

                        <div class="form-group">
                            <label for="formGroupExampleInput">หมายเลขบัตร</label>
                            <input class="form-control" type="text" name="num" id="num" placeholder="0000 0000 0000 0000" size="18" minlength="19" maxlength="19">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">ชื่อบนบัตร</label>
                            <input type="text" class="form-control" name="name" id="name" id="formGroupExampleInput2" placeholder="ชื่อ นามสกุล">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>วันที่บัตรหมดอาย</label>
                            <input type="tel" class="form-control" name="date" id="date" placeholder="MM/YY" size="6" minlength="5" maxlength="5">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>รหัส CVC</label>
                            <input class="form-control" type="tel" name="cvc" id="cvc"  pattern="\d*" maxlength="3" placeholder="CVC">
                        </div>

                        <button type="submit" name="submit" id="myBtn" class="btn btn-dark btn-lg btn-block sub" style="border-radius: 50px;">ยืนยันการสั่งซื้อ</button>
                        
                    </form>
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