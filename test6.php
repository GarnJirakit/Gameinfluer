<?php
include('config.php');

if(!isset($_SESSION['loggedinId']))
{
    header('location:login2.php');
}

if(isset($_REQUEST['submit']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket - 1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit2']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit3']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 5 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit4']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 20 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit5']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 50 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit6']))
{
    $ticket=$_REQUEST['NumTicket'];
    $ticket1=$_REQUEST['ticket1'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + $ticket1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

$userId=$_SESSION['loggedinId'];
$getData=mysqli_query($db,"SELECT * FROM `ts_brand` WHERE `id`='$userId'");
$row=mysqli_fetch_assoc($getData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

    <!-- -------------bootstrap------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-16" />

    <!-- -------------fontawsome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- -------------css------------- -->
    <link rel="stylesheet" href="css/search1.css">
    <link rel="stylesheet" href="css/logout.css">

    <title>Gameinfluer</title>
    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
    <a class="navbar-brand" style="padding:10px;"; href="#">
            <img src="https://sv1.picz.in.th/images/2022/01/28/nVtqzk.png" width="40" height="30" alt="">
        </a>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index1.php" style="color:white;">GAMEINFLUER</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-center">
            <li><a href="compare1.php"><i class="fas fa-users"></i>&nbsp; รายชื่ออินฟลูเอนเซอร์</a></li>
            <li><a href="search1.php" class="active"><i class="fas fa-search"></i>&nbsp; ค้นหาอินฟลูเอนเซอร์</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="test5.php"><i class="fas fa-ticket-alt"></i>&nbsp;<?php echo $row['NumTicket']; ?>&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['name']; ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout2.php">ออกจากระบบ</a>
                    </div>
            </div>
        </ul>
    </div>
</nav>

<div class="container" style="padding-left:100px; padding-right:100px">
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

<h2><?php echo $row['NumTicket']; ?></h2>
<h4>จำนวนตั๋ว</h4>
<br>
  <form method="POST" action="#" enctype="multipart/form-data">
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-dark col-3 popbut">ใช้ตั๋วเพื่อดูโปรไฟล์ <i class="fas fa-ticket-alt"></i>&nbsp;-1</button>&nbsp;&nbsp;
          

        </div>
        <br>
        <div class="col-12">
            <button type="submit" name="submit2" class="btn btn-dark col-3 popbut">ซื้อตั๋วชุด 1 จำนวน 1 ตั๋ว</button>&nbsp;&nbsp;
            <button type="submit" name="submit3" class="btn btn-dark col-3 popbut">ซื้อตั๋วชุด 2 จำนวน 5 ตั๋ว</button>&nbsp;&nbsp;
            <button type="submit" name="submit4" class="btn btn-dark col-3 popbut">ซื้อตั๋วชุด 3 จำนวน 20 ตั๋ว</button>&nbsp;&nbsp;
            <button type="submit" name="submit5" class="btn btn-dark col-3 popbut">ซื้อตั๋วชุด 4 จำนวน 50 ตั๋ว</button>&nbsp;&nbsp;
        </div>

        <div class="col-12">
            <div class="form-group">
                <label class="label">เลือกชุดตั๋ว</label>
                <input class="form-control" list="browsers" name="ticket1" id="browser" placeholder="เลือกชุดตั๋ว">
                <datalist id="browsers">
                    <option value="1">1</option>
                    <option value="5">5</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </datalist>            
            </div>
            <button class="btn btn-dark col-3" type="submit" name="submit6">ยืนยันการสั่งซื้อ</button>
        </div>
        

  </form>

</div>

<div class="footer-basic">
    <footer>
      <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
        <p class="copyright">© 2022 Gameinfluer. All Rights Reserved</p>
      </footer>
  </div>
    
</body>
</html>