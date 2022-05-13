<!--- PHP ---->

<?php
include('config.php');
?>

<!--- End PHP --->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gameinfluer</title>
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
          <h2 class="title colabout"><img src="images/brand.png" width="60" height="60" alt="">&nbsp; ลงทะเบียนแบรนด์ / เอเจนซี่</h2>
          <input>

          <form method="POST" action="submit2.php">

            <div class="row row-space">

              <div class="col-12">
                <div class="form-group">
                  <label for="email">สร้างบัญชี</label>
                  <input type="email" class="input--style-4" id="email" placeholder="ใส่อีเมลสำหรับเข้าระบบ .." name="email">
                </div>
              </div>

              <div class="col-12">
                <div class="input-group">
                  <input class="input--style-4" id="pwd" type="password" name="pswd" placeholder="ใส่รหัสผ่านสำหรับเข้าระบบ ...">
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
                <div class="input-group">
                  <label class="label">เพศ</label>
                  <input type="radio" name="gender" value="ชาย"/> ชาย
                  <input type="radio" name="gender" value="หญิง"/> หญิง
                  <input type="radio" name="gender" value="LGBTQ+"/> LGBTQ+
                </div>
              </div>

              <div class="col-12">
                <div class="input-group">
                  <label class="label">ชื่อบริษัท / ชื่อร้านค้า / ชื่อทีม</label>
                  <input class="input--style-4" type="text" id="company" name="company" placeholder="ใส่ชื่อบริษัท, ร้านค้า หรือทีมของคุณ ...">
                </div>
              </div>

              <div class="col-12">
                <div class="input-group">
                  <label class="label">ประเภทธุรกิจ</label>
                  <input class="input--style-4" list="browsers" name="business" id="browser" placeholder="เลือกประเภทธุรกิจของคุณ ...">
                  <datalist id="browsers">
                    <option value="สินค้าอุปโภคบริโภค">สินค้าอุปโภคบริโภค</option>
                    <option value="ความสวยความงาม">ความสวยความงาม</option>
                    <option value="ซื้อขายออนไลน์">ซื้อขายออนไลน์</option>
                    <option value="ยานยนต์">ยานยนต์ </option>
                    <option value="เกมส์มิ่ง">เกมส์มิ่ง </option>
                    <option value="อุปกรณ์แกดเจ็ต">อุปกรณ์แกดเจ็ต</option>
                    <option value="อาหารเครื่องดื่ม">อาหารเครื่องดื่ม</option>
                  </datalist>            
                </div>
              </div>

              <div class="col-12">
                <div class="input-group">
                  <label class="label">ตำแหน่งงาน</label>
                  <input class="input--style-4" list="browsers2" name="job" id="browser2" placeholder="เลือกตำแหน่งงานของคุณ ...">
                  <datalist id="browsers2">
                    <option value="นักการตลาด">นักการตลาด</option>
                    <option value="แอดมินดูแล">แอดมินดูแล</option>
                    <option value="นักพัฒนา">นักพัฒนา</option>
                  </datalist>            
                </div>
              </div>

              <div class="col-12">
                <div class="input-group">
                  <label class="label">วันเกิด</label>
                  <input class="input--style-4" type="date" id="start" name="birthday" value="2001-01-01" min="1900-01-01" max="2022-12-31">
                </div>
              </div>
                            
              <div class="col-12">
                <div class="input-group">
                  <label class="label">จังหวัด</label>
                  <input class="input--style-4" list="browsers3" name="province" id="browser3" placeholder="เลือกจังหวัดของคุณ ...">
                  <datalist id="browsers3">
                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                    <option value="กระบี่">กระบี่ </option>
                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                    <option value="ขอนแก่น">ขอนแก่น</option>
                    <option value="จันทบุรี">จันทบุรี</option>
                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                    <option value="ชัยนาท">ชัยนาท </option>
                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                    <option value="ชุมพร">ชุมพร </option>
                    <option value="ชลบุรี">ชลบุรี </option>
                    <option value="เชียงใหม่">เชียงใหม่ </option>
                    <option value="เชียงราย">เชียงราย </option>
                    <option value="ตรัง">ตรัง </option>
                    <option value="ตราด">ตราด </option>
                    <option value="ตาก">ตาก </option>
                    <option value="นครนายก">นครนายก </option>
                    <option value="นครปฐม">นครปฐม </option>
                    <option value="นครพนม">นครพนม </option>
                    <option value="นครราชสีมา">นครราชสีมา </option>
                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                    <option value="นครสวรรค์">นครสวรรค์ </option>
                    <option value="นราธิวาส">นราธิวาส </option>
                    <option value="น่าน">น่าน </option>
                    <option value="นนทบุรี">นนทบุรี </option>
                    <option value="บึงกาฬ">บึงกาฬ</option>
                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                    <option value="ปทุมธานี">ปทุมธานี </option>
                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                    <option value="ปัตตานี">ปัตตานี </option>
                    <option value="พะเยา">พะเยา </option>
                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                    <option value="พังงา">พังงา </option>
                    <option value="พิจิตร">พิจิตร </option>
                    <option value="พิษณุโลก">พิษณุโลก </option>
                    <option value="เพชรบุรี">เพชรบุรี </option>
                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                    <option value="แพร่">แพร่ </option>
                    <option value="พัทลุง">พัทลุง </option>
                    <option value="ภูเก็ต">ภูเก็ต </option>
                    <option value="มหาสารคาม">มหาสารคาม </option>
                    <option value="มุกดาหาร">มุกดาหาร </option>
                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                    <option value="ยโสธร">ยโสธร </option>
                    <option value="ยะลา">ยะลา </option>
                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                    <option value="ระนอง">ระนอง </option>
                    <option value="ระยอง">ระยอง </option>
                    <option value="ราชบุรี">ราชบุรี</option>
                    <option value="ลพบุรี">ลพบุรี </option>
                    <option value="ลำปาง">ลำปาง </option>
                    <option value="ลำพูน">ลำพูน </option>
                    <option value="เลย">เลย </option>
                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                    <option value="สกลนคร">สกลนคร</option>
                    <option value="สงขลา">สงขลา </option>
                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                    <option value="สระแก้ว">สระแก้ว </option>
                    <option value="สระบุรี">สระบุรี </option>
                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                    <option value="สุโขทัย">สุโขทัย </option>
                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                    <option value="สุรินทร์">สุรินทร์ </option>
                    <option value="สตูล">สตูล </option>
                    <option value="หนองคาย">หนองคาย </option>
                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                    <option value="อุดรธานี">อุดรธานี </option>
                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                    <option value="อุทัยธานี">อุทัยธานี </option>
                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                    <option value="อ่างทอง">อ่างทอง </option>
                  </datalist>            
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="email">เบอร์โทรติดต่อ</label>
                  <input type="text" class="input--style-4" id="phone" placeholder="ใส่เบอร์โทรมือถือของคุณ ..." name="contact_no">
                </div>
              </div>

            </div> <br><br>
            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block sub" style="border-radius: 50px;">ลงทะเบียน</button>
          </form>
          <br>
          <hr>

          <h6 style="text-align: center;">หากสมัครบัญชีแล้ว กดปุ่มเพื่อเข้าสู่ระบบ</h6>
          <div style="height:10px;"></div>
          <div style="">
            <a href="login2.php" class="btn btn-secondary popbut" type="submit" style="margin-left:55px;">เข้าสู่ระบบแบรนด์ / เอนเจนซี่</a>
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