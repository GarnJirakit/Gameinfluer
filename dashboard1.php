<?php
    include('config.php');

    $userId=$_SESSION['loggedinId'];
    $query = "SELECT cost, cost2, facebookCount, youtubeCount, igCount, twitterCount, twitchCount, tiktokCount FROM `ts_user` WHERE `id`='$userId'";
    $qresult = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($qresult);
    $cost = $row["cost"];
    $cost2 = $row["cost2"];
    $facebookCount = $row["facebookCount"];
    $youtubeCount = $row["youtubeCount"];
    $igCount = $row["igCount"];
    $twitterCount = $row["twitterCount"];
    $twitchCount = $row["twitchCount"];
    $tiktokCount = $row["tiktokCount"];

    $userId=$_SESSION['loggedinId'];
    $query = "SELECT sum(facebookCount + youtubeCount + igCount + twitterCount + twitchCount + tiktokCount) FROM `ts_user` WHERE `id`='$userId'";
    $qresult = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($qresult);
    $count = $row["sum(facebookCount + youtubeCount + igCount + twitterCount + twitchCount + tiktokCount)"];

    if(!isset($_SESSION['loggedinId']))
    {
        session_start();
        header('location:login1.php');
    }

    $userId=$_SESSION['loggedinId'];
    $getData=mysqli_query($db,"SELECT * FROM `ts_user` WHERE `id`='$userId'");
    $row=mysqli_fetch_assoc($getData);  

    function abbreviateNumber($num) {
        if ($num >= 0 && $num < 1000) {
          $format = floor($num);
          $suffix = '';
        } 
        else if ($num >= 1000 && $num < 1000000) {
          $format = floor($num / 1000);
          $suffix = 'K+';
        } 
        else if ($num >= 1000000 && $num < 1000000000) {
          $format = floor($num / 1000000);
          $suffix = 'M+';
        } 
        else if ($num >= 1000000000 && $num < 1000000000000) {
          $format = floor($num / 1000000000);
          $suffix = 'B+';
        } 
        else if ($num >= 1000000000000) {
          $format = floor($num / 1000000000000);
          $suffix = 'T+';
        }
        
        return !empty($format . $suffix) ? $format . $suffix : 0;
    }

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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/logout.css">

    <script src="js/rating.js"></script>

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
        
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .modal-content {
            height: 85%;
        }
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

<!-- Navbar -->

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
</nav> <br>

<!-- End Navbar -->

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

    <div class="row justify-content-md-center">
        <div class="col col-lg-6 ">
            <h2><i class="far fa-user"></i>&nbsp;หน้าโปรไฟล์</h2>
        </div>

        <div class="col col-lg-6">
            <a class="btn btn-outline-dark" href="edit.php" role="button"><i class="far fa-edit"></i>&nbsp; แก้ไขโปรไฟล์</a>
        </div>
    </div> <br><br><br><br>

    <div class="row justify-content-md-center">
        <div class="col col-lg-6" style="">
            <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" style="width:350px; height:350px; border-radius: 25px; margin-left: 100px;"> 
        </div>

        <div class="col col-lg-6 head">

            <h1><?php echo $row['nameinflu']; ?></h1>
            <h3>
                <?php 
                echo number_format($count);  
                ?>
            </h3>
            <p>คนติดตามรวมทุกช่องทาง</p>

                <div class="row">
                    <a href="<?php echo $row['facebook'];?>">
                        <div class="col-lg-4 soical" style="">
                            <i class="fab fa-facebook" style="color:blue;"></i><span>
                            <?php
                                echo abbreviateNumber($facebookCount); 
                            ?> 
                            <i class="fas fa-user-friends"></i></span>
                        </div>
                    </a>

                    <a href="<?php echo $row['youtube'];?>">
                        <div class="col-lg-4 soical" style="">
                            <i class="fab fa-youtube" style="color:red;"></i><span>
                            <?php
                                echo abbreviateNumber($youtubeCount); 
                            ?> 
                            <i class="fas fa-user-friends"></i></span>
                        </div>
                    </a>

                    <a href="<?php echo $row['ig'];?>">
                        <div class="col-lg-4 soical" style="">
                            <i class="fab fa-instagram" style="color:#C13584;"></i><span>
                            <?php
                                echo abbreviateNumber($igCount); 
                            ?> 
                            <i class="fas fa-user-friends"></i></span>
                        </div>
                    </a> 
                </div>

                <div class="row">
                    <a href="<?php echo $row['twitter'];?>">
                        <div class="col-lg-4 soical" style="">
                            <i class="fab fa-twitter" style="color:#1DA1F2;"></i><span>
                            <?php
                                echo abbreviateNumber($twitterCount); 
                            ?> 
                            <i class="fas fa-user-friends"></i></span>
                        </div>
                    </a>

                    <a href="<?php echo $row['twitch'];?>">
                        <div class="col-lg-4 soical" style="">
                            <i class="fab fa-twitch" style="color:#6441a5;"></i><span>
                            <?php
                                echo abbreviateNumber($twitchCount); 
                            ?> 
                            <i class="fas fa-user-friends"></i></span>
                        </div>
                    </a>

                    <a href="<?php echo $row['tiktok'];?>">
                        <div class="col-lg-4 soical" style="">
                            <i class="fab fa-tiktok" style="color:#C13584;"></i><span>
                            <?php
                                echo abbreviateNumber($tiktokCount); 
                            ?> 
                            <i class="fas fa-user-friends"></i></span>
                        </div>
                    </a>
                </div>

                <div style="height:10px;"></div>

                <p><i class="fas fa-info-circle"></i> เลือกและกดปุ่มเพื่อไปยังแต่ละหน้าโซเชียลมีเดียได้</p>

        </div>
    </div> <br><br>

    <hr> <br>

    <!-- รายละเอียด -->

    <div class="row justify-content-md-center">

        <div class="col col-lg-12">
            <h3><img src="https://sparkgrowth.com/wp-content/uploads/2017/08/icon-cash-animated.gif" width="30"> เรทราคา</h3>
            <div style="height: 2px;"></div>
            <h4>เริ่มต้น <?php echo number_format($cost) ?> ถึง <?php echo number_format($cost2) ?> บาท</h4>
            <textarea readonly style="border: none; outline: none; height:150px;" type="text" class="form-control" id="cost_description" name="cost_description"><?php echo $row['cost_description']; ?></textarea>
            <!-- <h4 style="font-weight: normal;"><?php echo $row['cost_description']; ?><h4> -->
        </div>

        <div style="height: 300px;"></div>

        <div class="col col-lg-6 ">
            <h3>รายละเอียดอินฟลูเอนเซอร์</h3> <br>
                <div class="row justify-content-md-center">
                    <div class="col col-lg-6 ">
                        <h4><i class="fas fa-venus-mars"></i>&nbsp; เพศ</h4>
                        <h4 style="font-weight: normal"><?php echo $row['gender']; ?></h4>
                    </div>

                    <div class="col col-lg-6 ">
                        <h4><i class="far fa-clock"></i>&nbsp; ประสบการณ์อินฟลู</h4>
                        <h4 style="font-weight: normal"><?php echo $row['time']; ?></h4>
                    </div>
                </div> <br>

            <h4><i class="fas fa-photo-video"></i>&nbsp; ทำรูปแบบคอนเทนต์</h4>
            <h4 style="font-weight: normal"><?php echo $row['content']; ?></h4> <br>

            <h4><i class="fas fa-desktop"></i>&nbsp; แพลตฟอร์มเกมที่เล่นตอนนี้</h4>
            <h4 style="font-weight: normal"><?php echo $row['platform']; ?></h4> <br>

            <h4><i class="fas fa-photo-video"></i>&nbsp; ประเภทของเกมที่ชอบ / ถนัด</h4> <br>
            <a class="game" href="" role="button"><i class="far fa-edit"></i>&nbsp; <?php echo $row['game']; ?></a> <br><br>

            <h4><i class="fas fa-desktop"></i>&nbsp; แพลตฟอร์มเกมที่เล่นตอนนี้</h4> <br>
            <a class="game" href="" role="button"><i class="far fa-edit"></i>&nbsp; <?php echo $row['love_game']; ?></a> <br><br><br>

            <h4><i class="far fa-file-alt"></i>&nbsp; รายละเอียดเพิ่มเติมที่อยากนำเสนอ</h4>
            <h4 style="font-weight: normal"><?php echo $row['description']; ?></h4>

        </div>

        <!-- จบ รายละเอียด -->

        <!-- ช่องทางติดต่อ -->

        <div class="col col-lg-6 tel" style="background-color: #E4E4E4; width: 250px; margin-left: 250px; padding-left: 30px; padding-bottom: 20px; padding-top: 20px; border-radius: 20px;">
            <h3>ช่องทางติดต่อ</h3> <br>
            <h4><i class="fas fa-mobile-alt"></i>&nbsp; เบอร์โทรติดต่อ</h4>
            <h4 style="font-weight: normal;"><?php echo $row['contact']; ?></h4> <br>

            <h4><i class="fas fa-at"></i>&nbsp; อีเมล</h4>
            <h4 style="font-weight: normal;"><?php echo $row['email']; ?></h4>
        </div>
        
        <!-- ช่องทางติดต่อ -->

    </div>

    <hr> <br>

    <!-- ตัวอย่างผลงาน -->

    <h3>ตัวอย่างคอนเทนต์ที่ทำ</h3> <br>

    <div class="row">
        <div class="column">
            <img src="images/<?php echo $row['pic1']; ?>" alt="Snow" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['text1']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['link1']; ?>">ลิงก์รับชม</a></p>
        </div>

        <div class="column">
            <img src="images/<?php echo $row['pic2']; ?>" alt="Forest" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['text2']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['link2']; ?>">ลิงก์รับชม</a></p>
        </div>

        <div class="column">
            <img src="images/<?php echo $row['pic3']; ?>" alt="Mountains" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['text3']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['link3']; ?>">ลิงก์รับชม</a></p>
        </div>
    </div> <br>

    <hr> <br>

    <h3><i class="fas fa-play"></i> ตัวอย่างวิดีโอคอนเทนต์</h3> <br>

    <div class="row">
        <div class="column">
            <img src="images/<?php echo $row['video1']; ?>" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['v_text1']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['v_link1']; ?>">ลิงก์รับชม</a></p>
        </div>

        <div class="column">
            <img src="images/<?php echo $row['video2']; ?>" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['v_text2']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['v_link2']; ?>">ลิงก์รับชม</a></p>
        </div>

        <div class="column">
            <img src="images/<?php echo $row['video3']; ?>" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['v_text3']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['v_link3']; ?>">ลิงก์รับชม</a></p>
        </div>
    </div>

    <!-- <div class="row">
        <div class="column">
            <iframe style="padding-right: 80px;" width="400" height="400"  src="https://player.twitch.tv/?video=<?php echo $row['video']; ?>&parent=localhost" frameborder="0" allowfullscreen></iframe>
            <br>
            <p>รายละเอียดของวีดีโอที่ 1 เป็นงานที่ทำเมื่อ ....</p>
        </div>
        <div class="column"  > 
            <iframe style="padding-left: 0px; padding-right: 80px;" width="400" height="400"  src="https://www.youtube.com/embed/<?php echo $row['video2']; ?>" frameborder="0" allowfullscreen></iframe>
            <br>
            <p>รายละเอียดของวีดีโอที่ 2 เป็นงานที่ทำเมื่อ ....</p>
        </div>     
        <div class="column">
            <iframe style="padding-left: 0px;" width="500" height="400"  src="https://www.tiktok.com/embed/<?php echo $row['video3']; ?>" frameborder="0" allowfullscreen></iframe>
            <br>
            <p>รายละเอียดของวีดีโอที่ 3 เป็นงานที่ทำเมื่อ ....</p>
        </div>  
        <div class="column">
            <blockquote style="padding-right: 80px;" class="twitter-tweet"><a href="<?php echo $row['video4']; ?>"></a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <br>
            <p>รายละเอียดของวีดีโอที่ 4 เป็นงานที่ทำเมื่อ ....</p>
        </div>     
        <div class="column">
            <blockquote style="padding-bottom: -80px;" width="500" height="400" class="instagram-media"><a href="<?php echo $row['video5']; ?>"></a></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            <br>
            <p>รายละเอียดของวีดีโอที่ 5 เป็นงานที่ทำเมื่อ ....</p>
        </div> 
        <div class="column">
            <iframe width="400" height="300"  src="https://www.facebook.com/plugins/<?php echo $row['video6']; ?>" frameborder="0" allowfullscreen></iframe>
            <br>
            <p>รายละเอียดของวีดีโอที่ 6 เป็นงานที่ทำเมื่อ ....</p>
        </div>  

       
    </div> -->

    <hr> <br>

    <h3>ตัวอย่างผลงานที่ได้จ้าง</h3>
    <br>
    <div class="row col-12">
        <div class="column col-4">
            <img src="images/<?php echo $row['pic4']; ?>" alt="Snow" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['text4']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['link4']; ?>">ลิงก์รับชม</a></p>
        </div>
        <div class="column col-4">
            <img src="images/<?php echo $row['pic5']; ?>" alt="Forest" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['text5']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['link5']; ?>">ลิงก์รับชม</a></p>
        </div>
        <div class="column col-4">
            <img src="images/<?php echo $row['pic6']; ?>" alt="Mountains" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['text6']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['link6']; ?>">ลิงก์รับชม</a></p>
        </div>
    </div>

    <br>
    <hr>

    <h3><i class="fas fa-play"></i> ตัวอย่างวิดีโอผลงานที่ได้จ้าง</h3>
    <br>

    <div class="row">
        <div class="column">
            <img src="images/<?php echo $row['video4']; ?>" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['v_text4']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['v_link4']; ?>">ลิงก์รับชม</a></p>
        </div>

        <div class="column">
            <img src="images/<?php echo $row['video5']; ?>" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['v_text5']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['v_link5']; ?>">ลิงก์รับชม</a></p>
        </div>

        <div class="column">
            <img src="images/<?php echo $row['video6']; ?>" style="width:324px; height:324px;">
            <div style="height:5px;"></div>
            <br>
            <p><?php echo $row['v_text6']; ?></p>
            <p><i class="fas fa-link"></i> <a href="<?php echo $row['v_link6']; ?>">ลิงก์รับชม</a></p>
        </div>
    </div>

    <br>
    <hr>

    <!-- จบ ตัวอย่างผลงาน -->

    <!-- รีวิว -->

</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
</script>

<div class="footer-basic">
    <footer>
        <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
            <p class="copyright">© 2022 Gameinfluer. All Rights Reserved</p>
    </footer>
</div>
  
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
    
</body>
</html>