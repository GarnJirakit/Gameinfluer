<?php
include('config.php');

$message = '';
if(isset($_REQUEST['submit']))
  {
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    
    $query=mysqli_query($db,"SELECT * FROM `ts_user` WHERE `email`='$email' AND `password`='$password'");
    $rowCount=mysqli_num_rows($query);

    if($rowCount > 0)
    {
        $rt=mysqli_fetch_assoc($query);
        $userId=$rt['id'];

        $_SESSION['loggedinId']=$userId;
        $_SESSION['successMsg']="Welcome";
        header('location:makepro1.php');
        exit;
    }
    else
    {
        $_SESSION['errorMsg']="Invalid login credentials";
        header('location:login1.php');
        exit;
    }

    if(empty($_POST["email"]))
    {
      $message = "<div class='alert alert-danger'>Both Fields are required</div>";
      }
        else
      {
        $query = "SELECT * FROM ts_user WHERE email = :email";
        $statement = $connect->prepare($query);
        $statement->execute(
        array('email' => $_POST["email"]));
        $count = $statement->rowCount();
        if($count > 0)
        {
          $result = $statement->fetchAll();
          foreach($result as $row)
          {
            if($row["status"] == 'Active')
            {
              $_SESSION["type"] = $row["user_type"];
              header("location: admin_status.php");
            }
              else
            {
              $message = '<div class="alert alert-danger"><i class="fas fa-times-circle"></i> ไม่สามารถเข้าสู่ระบบได้ เนื่องจากบัญชีถูกระงับ</div>';
            }
          }
        }
        else
        {
          $message = "<div class='alert alert-danger'>ใส่อีเมลผิด</div>";
        }
    }
  }
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
    <h2><img src="https://cdn-icons-png.flaticon.com/512/287/287208.png" alt="" width="30px;"> เข้าสู่ระบบอินฟลูเอนเซอร์</h2> <br>

    <form method="POST" action="#">

      <div class="form-group">
        <label for="email" style="font-weight: normal;">อีเมล:</label>
        <input type="email" class="form-control" id="email" placeholder="ใส่อีเมลของคุณ ..." name="email">
      </div>

      <div class="form-group">
        <label for="pwd" style="font-weight: normal;">รหัสผ่าน:</label>
        <input type="password" class="form-control" id="pwd" placeholder="ใส่รหัสผ่านของคุณ ..." name="password">
      </div>
      <p class="text"><a class="texxt">ลืม Password ?</a></p>

        <br> <button type="submit" name="submit" id="submit" class="btn btn-dark btn-lg btn-block sub">ยืนยันเข้าสู่ระบบ</button>
    </form> <br><br>

    <hr>

    <div style="height:5px;"></div>
    <h4 style="text-align: center;">หากยังไม่ได้สมัครบัญชี กดปุ่มนี้เลย</h4>
    <div style="height:10px;"></div>
    <div style="padding-left:150px;">
    <a href="register.php" class="btn btn-secondary col-3 popbut" type="submit">สมัครอินฟลูเอนเซอร์</a>
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