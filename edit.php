<!--- PHP ---->

<?php
include('config.php');

if(!isset($_SESSION['loggedinId']))
{
    header('location:login1.php');
}

if(isset($_REQUEST['submit']))
{
    $img=$_FILES['img']['name'];
    $nameinflu=$_REQUEST['nameinflu'];
    $cost=$_REQUEST['cost'];
    $cost2=$_REQUEST['cost2'];
    $cost_description=$_REQUEST['cost_description'];
    $gender=$_REQUEST['gender'];
    $time=$_REQUEST['time'];
    $content=$_REQUEST['content'];
    $platform=$_REQUEST['platform'];
    $game=$_REQUEST['game'];
    $love_game=$_REQUEST['love_game'];
    $description=$_REQUEST['description'];
    $email=$_REQUEST['email'];
    $contact=$_REQUEST['contact'];
    // $password=$_REQUEST['password'];

    $facebook=$_REQUEST['facebook'];
    $youtube=$_REQUEST['youtube'];
    $twitter=$_REQUEST['twitter'];
    $ig=$_REQUEST['ig'];
    $twitch=$_REQUEST['twitch'];
    $tiktok=$_REQUEST['tiktok'];

    $facebookCount=$_REQUEST['facebookCount'];
    $youtubeCount=$_REQUEST['youtubeCount'];
    $igCount=$_REQUEST['igCount'];
    $twitterCount=$_REQUEST['twitterCount'];
    $twitchCount=$_REQUEST['twitchCount'];
    $tiktokCount=$_REQUEST['tiktokCount'];

    $text1=$_REQUEST['text1'];
    $text2=$_REQUEST['text2'];
    $text3=$_REQUEST['text3'];
    $text4=$_REQUEST['text4'];
    $text5=$_REQUEST['text5'];
    $text6=$_REQUEST['text6'];
    $v_text1=$_REQUEST['v_text1'];
    $v_text2=$_REQUEST['v_text2'];
    $v_text3=$_REQUEST['v_text3'];
    $v_text4=$_REQUEST['v_text4'];
    $v_text5=$_REQUEST['v_text5'];
    $v_text6=$_REQUEST['v_text6'];

    $link1=$_REQUEST['link1'];
    $link2=$_REQUEST['link2'];
    $link3=$_REQUEST['link3'];
    $link4=$_REQUEST['link4'];
    $link5=$_REQUEST['link5'];
    $link6=$_REQUEST['link6'];
    $v_link1=$_REQUEST['v_link1'];
    $v_link2=$_REQUEST['v_link2'];
    $v_link3=$_REQUEST['v_link3'];
    $v_link4=$_REQUEST['v_link4'];
    $v_link5=$_REQUEST['v_link5'];
    $v_link6=$_REQUEST['v_link6'];

    $img2=$_FILES['pic1']['name'];
    $img3=$_FILES['pic2']['name'];
    $img4=$_FILES['pic3']['name'];
    $img5=$_FILES['pic4']['name'];
    $img6=$_FILES['pic5']['name'];
    $img7=$_FILES['pic6']['name'];

    $img8=$_FILES['video1']['name'];
    $img9=$_FILES['video2']['name'];
    $img10=$_FILES['video3']['name'];
    $img11=$_FILES['video4']['name'];
    $img12=$_FILES['video5']['name'];
    $img13=$_FILES['video6']['name'];
    
    if((!empty($nameinflu)) && (!empty($email)) && (!empty($contact)))
    {
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE `ts_user` SET `nameinflu`='$nameinflu',`cost`='$cost',`cost2`='$cost2',`cost_description`='$cost_description',`gender`='$gender',`time`='$time',`content`='$content'
        ,`platform`='$platform',`game`='$game',`love_game`='$love_game',`description`='$description',`email`='$email',`contact`='$contact',
        `facebook`='$facebook',`youtube`='$youtube',`twitter`='$twitter',`ig`='$ig',`twitch`='$twitch',`tiktok`='$tiktok',
        `facebookCount`='$facebookCount',`youtubeCount`='$youtubeCount',`igCount`='$igCount',`twitterCount`='$twitterCount',`twitchCount`='$twitchCount',`tiktokCount`='$tiktokCount',
        `text1`='$text1',`text2`='$text2',`text3`='$text3',`text4`='$text4',`text5`='$text5',`text6`='$text6',`v_text1`='$v_text1',`v_text2`='$v_text2',
        `v_text3`='$v_text3',`v_text4`='$v_text4',`v_text5`='$v_text5',`v_text6`='$v_text6',`link1`='$link1',`link2`='$link2',`link3`='$link3',
        `link4`='$link4',`link5`='$link5',`link6`='$link6',`v_link1`='$v_link1',`v_link2`='$v_link2',`v_link3`='$v_link3',`v_link4`='$v_link4',
        `v_link5`='$v_link5',`v_link6`='$v_link6' WHERE `id`='$userId'");

        if(!empty($password))
        {
            $up=mysqli_query($db,"UPDATE `ts_user` SET `password`='$password' WHERE `id`='$userId'");
        }

        if(!empty($img))
        {
            $tmpName=$_FILES['img']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `image`='$img' WHERE `id`='$userId'");
        }
        if(!empty($img2))
        {
            $tmpName=$_FILES['pic1']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img2);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `pic1`='$img2' WHERE `id`='$userId'");
        }

        if(!empty($img3))
        {
            $tmpName=$_FILES['pic2']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img3);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `pic2`='$img3' WHERE `id`='$userId'");
        }


        if(!empty($img4))
        {
            $tmpName=$_FILES['pic3']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img4);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `pic3`='$img4' WHERE `id`='$userId'");
        }


        if(!empty($img5))
        {
            $tmpName=$_FILES['pic4']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img5);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `pic4`='$img5' WHERE `id`='$userId'");
        }


        if(!empty($img6))
        {
            $tmpName=$_FILES['pic5']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img6);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `pic5`='$img6' WHERE `id`='$userId'");
        }


        if(!empty($img7))
        {
            $tmpName=$_FILES['pic6']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img7);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `pic6`='$img7' WHERE `id`='$userId'");
        }

        if(!empty($img8))
        {
            $tmpName=$_FILES['video1']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img8);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `video1`='$img8' WHERE `id`='$userId'");
        }

        if(!empty($img9))
        {
            $tmpName=$_FILES['video2']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img9);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `video2`='$img9' WHERE `id`='$userId'");
        }

        if(!empty($img10))
        {
            $tmpName=$_FILES['video3']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img10);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `video3`='$img10' WHERE `id`='$userId'");
        }

        if(!empty($img11))
        {
            $tmpName=$_FILES['video4']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img11);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `video4`='$img11' WHERE `id`='$userId'");
        }

        if(!empty($img12))
        {
            $tmpName=$_FILES['video5']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img12);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `video5`='$img12' WHERE `id`='$userId'");
        }

        if(!empty($img13))
        {
            $tmpName=$_FILES['video6']['tmp_name'];
            $uploadDir="images/";
            move_uploaded_file($tmpName,$uploadDir.$img13);
            $up=mysqli_query($db,"UPDATE `ts_user` SET `video6`='$img13' WHERE `id`='$userId'");
        }

        $_SESSION['successMsg']="Profile has been update";
        header('location:dashboard1.php');
        exit;
    }
    else
    {
        $_SESSION['errorMsg']="Name, Email and Contact are required";
        header('location:makepro1.php');
        exit;
    }
}

$userId=$_SESSION['loggedinId'];
$getData=mysqli_query($db,"SELECT * FROM `ts_user` WHERE `id`='$userId'");
$row=mysqli_fetch_assoc($getData);

?>

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
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- -------------fontawsome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- -------------css------------- -->
    <link rel="stylesheet" href="css/makepro.css">

    <title>Gameinfluer</title>
    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">

</head>
<body>
    
        <style>
.dropbtn {
  padding: 16px;
  font-size: 16px;
  border: none;
  background: none;
  color: white;
}

.dropbtn:hover, .dropbtn:focus {
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  font-size: 25px;
  width:60px;
  height:60px;
}

#myBtn:hover {
  background-color: #555;
}

</style>

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
        <ul class="nav navbar-nav navbar-right">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['name']; ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout.php">ออกจากระบบ</a>
                    </div>
            </div>
        </ul>
    </div>
</nav> <br><br>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-up"></i></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<div class="container" style="padding-left:100px; padding-right:100px">

  <h2><i class="far fa-edit"></i>&nbsp;แก้ไขโปรไฟล์</h2> <br>
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

  <form method="POST" action="#" enctype="multipart/form-data"> <br>

  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-dark col-3 popbut">ยืนยันแก้ไขโปรไฟล์</button>&nbsp;&nbsp;
    <a href="dashboard1.php" class="btn btn-dark col-3 popbut2">ยกเลิก</a>
  </div>

  <br>

    <img src="images/<?php echo $row['image']; ?>" id="blah" alt="<?php echo $row['name']; ?>" style="width:25%; border-radius: 50%; margin-left: 370px;"> 

    <div class="form-group"> <br>
      <label for="email">อัพโหลดรูปประจำตัว:</label>
      <input accept="image/*" type="file" class="form-control" id="imgInp" name="img">
    </div>
    
    <script>
      imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
      blah.src = URL.createObjectURL(file)
        }
      }     
    </script>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="email">ชื่ออินฟลูเอนเซอร์:</label>
          <input type="text" value="<?php echo $row['nameinflu']; ?>" class="form-control" id="nameinflu" placeholder="ใส่ชื่อของคุณ" name="nameinflu">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="time">ระยะเวลาในการเป็นอินฟลูเอนเซอร์:</label>
          <input type="text" value="<?php echo $row['time']; ?>" class="form-control" id="time" placeholder="ตัวอย่าง: 5 ปี" name="time">
        </div>
      </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <h3><img src="https://sparkgrowth.com/wp-content/uploads/2017/08/icon-cash-animated.gif" width="30"> เรทราคา</h3> <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="cost">เริ่มต้น:</label>
          <input type="text" value="<?php echo $row['cost']; ?>" class="form-control" id="cost" placeholder="ใส่ชื่อของคุณ" name="cost">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="cost2">ถึง:</label>
          <input type="text" value="<?php echo $row['cost2']; ?>" class="form-control" id="cost2" placeholder="ตัวอย่าง: 5 ปี" name="cost2">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="cost">รายละเอียด</label>
      <textarea style="outline: none; height:150px;" type="text" class="form-control" id="cost_description" name="cost_description"><?php echo $row['cost_description']; ?></textarea>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <h3><img src="https://cliply.co/wp-content/uploads/2019/04/371903520_SOCIAL_ICONS_1x1_400px.gif" width="40">ช่องทางโซเชียลมีเดีย</h3> <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <i style="color:blue;" class="fab fa-facebook"></i>
          <label for="email">Facebook</label>
          <input type="text" class="form-control" id="facebook" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="facebook" value="<?php echo $row['facebook']; ?>">
            <label for="email" style="font-weight: normal;">จำนวนผู้ติดตาม</label>
            <input type="text" class="form-control" id="facebookCount" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="facebookCount" value="<?php echo $row['facebookCount']; ?>">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <i style="color:red;" class="fab fa-youtube"></i>
          <label for="email">Youtube</label>
          <input type="text" class="form-control" id="youtube" placeholder="ตัวอย่าง: https://www.youtube.com/c/gameinfluer" name="youtube" value="<?php echo $row['youtube']; ?>">
            <label for="email" style="font-weight: normal;">จำนวนผู้ติดตาม</label>
            <input type="text" class="form-control" id="youtubeCount" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="youtubeCount" value="<?php echo $row['youtubeCount']; ?>">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <i style="color:#1DA1F2;" class="fab fa-twitter-square"></i>
          <label for="email">Twitter</label>
          <input type="text" class="form-control" id="twitter" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="twitter" value="<?php echo $row['twitter']; ?>">
            <label for="email" style="font-weight: normal;">จำนวนผู้ติดตาม</label>
            <input type="text" class="form-control" id="twitterCount" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="twitterCount" value="<?php echo $row['twitterCount']; ?>">
            
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <i style="color:#C13584;" class="fab fa-instagram"></i>
          <label for="email">Instagram</label>
          <input type="text" class="form-control" id="ig" placeholder="ตัวอย่าง: https://www.instagram.com/gameinfluer" name="ig" value="<?php echo $row['ig']; ?>">
            <label for="email" style="font-weight: normal;">จำนวนผู้ติดตาม</label>
            <input type="text" class="form-control" id="igCount" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="igCount" value="<?php echo $row['igCount']; ?>">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <i style="color:#6441a5;" class="fab fa-twitch"></i>
          <label for="email">Twich</label>
          <input type="text" class="form-control" id="twitch" placeholder="ตัวอย่าง: https://www.twitch.tv/gameinfluer" name="twitch" value="<?php echo $row['twitch']; ?>">
            <label for="email" style="font-weight: normal;">จำนวนผู้ติดตาม</label>
            <input type="text" class="form-control" id="twitchCount" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="twitchCount" value="<?php echo $row['twitchCount']; ?>">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <i style="color:#C13584;" class="fab fa-tiktok"></i>
          <label for="email">Tiktok</label>
          <input type="text" class="form-control" id="tiktok" placeholder="ตัวอย่าง: https://www.tiktok.com/@gameinfluer" name="tiktok" value="<?php echo $row['tiktok']; ?>">
            <label for="email" style="font-weight: normal;">จำนวนผู้ติดตาม</label>
            <input type="text" class="form-control" id="tiktokCount" placeholder="ตัวอย่าง: https://www.facebook.com/gameinfluer" name="tiktokCount" value="<?php echo $row['tiktokCount']; ?>">
        </div>
      </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <h3><i class="far fa-file-alt"></i>&nbsp;รายละเอียด</h3> <br>

    <div class="form-group">
      <label for="gender">เพศ:</label> <br>
      <input type="radio" id="gender" name="gender" value="ชาย">&nbsp; ชาย
      <input type="radio" id="gender" name="gender" value="หญิง">&nbsp; หญิง
      <input type="radio" id="gender" name="gender" value="อื่น ๆ">&nbsp; LGBTQ+
    </div>

          <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="content">ทำรูปแบบคอนเทนต์:</label> <br>
          <input type="checkbox" id="content" name="content" value="ข่าวสาร / PR">
          <label for="content" style="font-weight: normal"> ข่าวสาร / PR</label><br>
          <input type="checkbox" id="content" name="content" value="รีวิว / แนะนำเกม">
          <label for="content" style="font-weight: normal"> รีวิว / แนะนำเกม</label><br>
          <input type="checkbox" id="content" name="content" value="บทความ / สาระความ">
          <label for="content" style="font-weight: normal"> บทความ / สาระความ</label><br>
          <input type="checkbox" id="content" name="content" value="ไลฟ์สตรีมเล่นเกม">
          <label for="content" style="font-weight: normal"> ไลฟ์สตรีมเล่นเกม</label><br>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="platform">แพลตฟอร์มเกมที่เล่นตอนนี้:</label> <br>
          <input type="checkbox" id="platform" name="platform" value="PC">
          <label for="platform" style="font-weight: normal"> PC</label><br>
          <input type="checkbox" id="platform" name="platform" value="PlayStation">
          <label for="platform" style="font-weight: normal"> PlayStation</label><br>
          <input type="checkbox" id="platform" name="platform" value="Xbox">
          <label for="platform" style="font-weight: normal"> Xbox</label><br>
          <input type="checkbox" id="platform" name="platform" value="Nintendo Switch">
          <label for="platform" style="font-weight: normal"> Nintendo Switch</label><br>
          <input type="checkbox" id="platform" name="platform" value="Smart Phone">
          <label for="platform" style="font-weight: normal"> Smart Phone</label><br>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="game">ประเภทของเกมที่ชอบ / ถนัด:</label>
          <input type="text" value="<?php echo $row['game']; ?>" class="form-control" id="game" placeholder="เลือกประเภทได้มากกว่า 1 อย่าง" name="game">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="love_game">เกมที่ชื่นชอบ / เล่นอยู่ตอนนี้:</label>
          <input type="text" value="<?php echo $row['love_game']; ?>" class="form-control" id="love_game" placeholder="เลือกเกมได้มากกว่า 1 อย่าง" name="love_game">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="description">รายละเอียดเพิ่มเติมที่อยากนำเสนอ:</label>
      <textarea type="text" class="form-control" id="description" name="description"><?php echo $row['description']; ?></textarea>
      <div style="height:10px;"></div>
      <p>*ตัวอักษรทั้งหมดไม่เกิน 0/200</p>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <h3><i class="far fa-address-book"></i>&nbsp;ช่องทางติดต่อ</h3> <br>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="email">เบอร์โทร:</label>
          <input type="text" value="<?php echo $row['contact']; ?>" class="form-control" id="contact" placeholder="ใส่เบอร์โทรของคุณ" name="contact">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="form-group">
          <label for="email">อีเมล:</label>
          <input type="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" placeholder="ใส่อีเมลของคุณ" name="email">
        </div>
      </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <h3><i class="far fa-images"></i></i> &nbsp;ตัวอย่างคอนเทนต์ที่ทำ (รูปภาพ)</h3> <br>

    <!-- <img style="width:25%; border-radius: 50%; margin-left: 370px;" id="output"/> -->
    <br>
    <label for="email">รูปภาพที่ 1:</label>
    <input type="file" accept="image/*" class="form-control" id="pic1" name="pic1">
    <!-- <script>
      var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
          }
        };
</script> -->

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['text1']; ?>" class="form-control" id="text1" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="text1">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
          <h6 for="">ลิงก์เข้าชม</h6>
            <input type="text" value="<?php echo $row['link1']; ?>" class="form-control" id="link1" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link1">
          </div>
        </div>
    </div>


    <label for="email">รูปภาพที่ 2:</label>
    <input type="file" accept="image/*" class="form-control" id="pic2" name="pic2">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
        <input type="text" value="<?php echo $row['text2']; ?>" class="form-control" id="text2" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="text2">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
            <input type="text" value="<?php echo $row['link2']; ?>" class="form-control" id="link1" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link2">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพที่ 3:</label>
    <input type="file" accept="image/*" class="form-control" id="pic3" name="pic3">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['text3']; ?>" class="form-control" id="text3" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="text3">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['link3']; ?>" class="form-control" id="link3" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link3">
          </div>
        </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>   

    <h3><i class="fas fa-video"></i> &nbsp;ตัวอย่างคอนเทนต์ที่ทำ (วิดีโอ)</h3> <br>

    <label for="email">รูปภาพปกวิดีโอ 1:</label>
    <input type="file" accept="image/*" class="form-control" id="video1" name="video1">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <h6 for="">รายละเอียด</h6>
            <input type="text" value="<?php echo $row['v_text1']; ?>" class="form-control" id="v_text1" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="v_text1">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
          <h6 for="">ลิงก์เข้าชม</h6>
            <input type="text" value="<?php echo $row['v_link1']; ?>" class="form-control" id="v_link1" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="v_link1">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพปกวิดีโอ 2:</label>
    <input type="file" accept="image/*" class="form-control" id="video2" name="video2">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['v_text2']; ?>" class="form-control" id="v_text2" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="v_text2">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['v_link2']; ?>" class="form-control" id="v_link2" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="v_link2">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพปกวิดีโอ 3:</label>
    <input type="file" accept="image/*" class="form-control" id="video3" name="video3">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['v_text3']; ?>" class="form-control" id="v_text3" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="v_text3">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['v_link3']; ?>" class="form-control" id="v_link3" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="v_link3">
          </div>
        </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>  

    <h3><i class="far fa-images"></i>&nbsp;ตัวอย่างผลงานที่ได้จ้าง (รูปภาพ)</h3> <br>

    <label for="email">รูปภาพที่ 1:</label>
    <input type="file" accept="image/*" class="form-control" id="pic4" name="pic4">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['text4']; ?>" class="form-control" id="text4" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="text4">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['link4']; ?>" class="form-control" id="link4" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link4">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพที่ 2:</label>
    <input type="file" accept="image/*" class="form-control" id="pic5" name="pic5">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['text5']; ?>" class="form-control" id="text5" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="text5">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['link5']; ?>" class="form-control" id="link5" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link5">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพที่ 3:</label>
    <input type="file" accept="image/*" class="form-control" id="pic6" name="pic6">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['text6']; ?>" class="form-control" id="text6" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="text6">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['link6']; ?>" class="form-control" id="link6" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link6">
          </div>
        </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <h3><i class="fas fa-video"></i> &nbsp;ตัวอย่างวิดีโอผลงานที่ทำ (วิดีโอ)</h3> <br>

    <label for="email">รูปภาพปกวิดีโอ 1:</label>
    <input type="file" accept="image/*" class="form-control" id="video4" name="video4">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <h6 for="">รายละเอียด</h6>
            <input type="text" value="<?php echo $row['v_text4']; ?>" class="form-control" id="v_text4" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="v_text4">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
          <h6 for="">ลิงก์เข้าชม</h6>
            <input type="text" value="<?php echo $row['link4']; ?>" class="form-control" id="link4" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link4">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพปกวิดีโอ 2:</label>
    <input type="file" accept="image/*" class="form-control" id="video5" name="video5">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['v_text5']; ?>" class="form-control" id="v_text5" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="v_text5">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['link5']; ?>" class="form-control" id="link5" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link5">
          </div>
        </div>
    </div>

    <label for="email">รูปภาพปกวิดีโอ 3:</label>
    <input type="file" accept="image/*" class="form-control" id="video6" name="video6">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <h6 for="">รายละเอียด</h6>
          <input type="text" value="<?php echo $row['v_text6']; ?>" class="form-control" id="v_text6" placeholder="บอกเล่ารายละเอียดของงานชิ้นนี้" name="v_text6">
        </div>
      </div>
        <div class="col-lg-6">
          <div class="form-group">
            <h6 for="">ลิงก์เข้าชม</h6>
              <input type="text" value="<?php echo $row['link6']; ?>" class="form-control" id="link6" placeholder="ลิงก์เข้ารับชมของงานชิ้นนี้" name="link6">
          </div>
        </div>
    </div>

    <hr style="border-top:1px dotted #ccc; margin-top: 50px;"/> <br>

    <!-- <button type="submit" name="submit" class="btn btn-danger">ยืนยันสร้างโปรไฟล์</button>&nbsp;
    <a href="dashboard1.php">ยกเลิก</a> -->
    <div class="col-12">
        <button type="submit" name="submit" class="btn btn-dark col-3 popbut">ยืนยันแก้ไขโปรไฟล์</button>&nbsp;&nbsp;
        <a href="" class="btn btn-dark col-3 popbut2">ยกเลิก</a>
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
