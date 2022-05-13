<?php
$con = mysqli_connect("localhost","root","","gameinfluer");

$productOne = $productTwo = '';

$productOne = $_REQUEST['card_one'];
$productTwo = $_REQUEST['card_two'];

$pro1_sql = "SELECT * FROM `ts_user` WHERE id='".$productOne."'";
$pro1_query = mysqli_query($con, $pro1_sql);
$pro1 = mysqli_fetch_object($pro1_query);

$pro2_sql = "SELECT * FROM `ts_user` WHERE id='".$productTwo."'";
$pro2_query = mysqli_query($con, $pro2_sql);
$pro2 = mysqli_fetch_object($pro2_query);


include('config.php');

    if(!isset($_SESSION['loggedinId']))
    {
        session_start();
        header('location:login2.php');
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
    <!--     -->

    <!-- -------------bootstrap------------- -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- -------------fontawsome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Gameinfluer</title>
    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">
    <link rel="stylesheet" href="css/list2.css">
    <link rel="stylesheet" href="css/logout.css">

</head>
<body>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Kanit', sans-serif;
}
        .card{
            border: 2px solid #ccc; border-radius: 3px; padding: 10px;
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
        <ul class="nav navbar-nav navbar-center">
            <li><a href="compare1.php" class="active"><i class="fas fa-users"></i>&nbsp; รายชื่ออินฟลูเอนเซอร์</a></li>
            <li><a href="search1.php"><i class="fas fa-search"></i>&nbsp; ค้นหาอินฟลูเอนเซอร์</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="ticket1.php"><i class="fas fa-ticket-alt"></i>&nbsp;<?php echo $row['NumTicket']; ?>&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['name']; ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout2.php">ออกจากระบบ</a>
                    </div>
            </div>
        </ul>
    </div>
</nav>

<div class="container">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 30px;">
                <h2><img src="https://zellusmarketing.com/wp-content/uploads/2021/03/icon-1.1s-257px-1.gif" width="45">เปรียบเทียบอินฟลูเอนเซอร์</h2>
            </div>
            <div class="col-sm-6" style="margin-top: -50px; margin-left: 1010px;">
                <a class="btn btn-primary bt3" href="compare1.php" style="text-align: right;"><h5><i class="fal fa-angle-left"></i> ย้อนกลับไป</h5></a>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">

            <div class="col-sm-6" style="margin-bottom: 30px;">
                <div class="card" style="padding-top: 30px; border-radius: 25px;">
                    <img src="images/<?php echo $pro1->image; ?>" class="card-img-top" alt="" style="width:250px; height:250px; border-radius: 50%;">
                    <h3 style="width:100%; padding:10px;">คนที่ 1 : <?php echo $pro1->nameinflu; ?></h3>
                    <!-- <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/> -->

                    <div class="" style="padding:5px">
                        <h5>เรทราคา:</h5>
                        <h5 style="text-align: center; height: 1px;">เริ่มต้น</h5>
                        <h2 style="text-align: center; height: 40px;"><?php echo $pro1->cost; ?></h2>
                        <h5 style="text-align: center; height: 5px;">ถึง</h5>
                        <h2 style="text-align: center;"><?php echo $pro1->cost2; ?></h2> 
                        <h4 style="text-align: center;">บาท</h4>  
                        <h4></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 5px;"/>

                        <div class="" style="padding:5px;">
                            <h5>จำนวนผู้ติดตาม: </h5>
                            <h4><i class="fab fa-facebook" style="color: #2f55a4;"></i>&nbsp;Facebook : <?php echo $pro1->facebookCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-youtube" style="color: #FF0000;"></i>&nbsp;Youtube : <?php echo $pro1->youtubeCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-instagram" style="color: #C13584;"></i>&nbsp;Instragam : <?php echo $pro1->igCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-twitter" style="color: #1DA1F2;"></i>&nbsp;Twitter : <?php echo $pro1->twitterCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-twitch" style="color: #6441a5;"></i>&nbsp;Twitch : <?php echo $pro1->twitchCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-tiktok" style="color: #C13584;"></i>&nbsp;Tiktok : <?php echo $pro1->tiktokCount; ?> ผู้ติดตาม</h4>
                        </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                        <div class="" style="padding:5px;">
                            <h4 class="bold padding-bottom-7"><i class="fas fa-star"></i> 4<small></small></h4>
                        </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>จำนวนปีที่เป็นอินฟลูเอนเซอร์:</h5>
                        <h4><?php echo $pro1->time; ?> ปี</h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>
                    
                    <div class="" style="padding:5px">
                        <h5>คอนเทนต์:</h5>
                        <h4><?php echo $pro1->content; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>แพลตฟอร์ม:</h5>
                        <h4><?php echo $pro1->platform; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>แนวเกม:</h5>
                        <h4><?php echo $pro1->game; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>
                    
                    <div class="" style="padding:5px">
                        <h5>เกมที่ชอบ:</h5>
                        <h4><?php echo $pro1->love_game; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>รายละเอียด:</h5>
                        <h4><?php echo $pro1->description; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <br>
                    <a href="profile.php?item_id=<?php echo $pro1->id; ?>" class="btn btn-primary bt4">ดูโปรไฟล์</a><br><br>
                </div>
            </div>

            <div class="col-sm-6" style="margin-bottom: 30px;">
                <div class="card" style="padding-top: 30px; border-radius: 25px;">
                    <img src="images/<?php echo $pro2->image; ?>" class="card-img-top" alt="" style="width:250px; height:250px; border-radius: 50%;">
                    <h3 style="width:100%; padding:10px;">คนที่ 2 : <?php echo $pro2->nameinflu; ?></h3>
                    <!-- <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/> -->
                    <div class="" style="padding:5px">
                        <h5>เรทราคา:</h5>
                        <h5 style="text-align: center; height: 1px;">เริ่มต้น</h5>
                        <h2 style="text-align: center; height: 40px;"><?php echo $pro2->cost; ?></h2>
                        <h5 style="text-align: center; height: 5px;">ถึง</h5>
                        <h2 style="text-align: center;"><?php echo $pro2->cost2; ?></h2> 
                        <h4 style="text-align: center;">บาท</h4>  
                        <h4></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 5px;"/>

                        <div class="" style="padding:5px;">
                            <h5>จำนวนผู้ติดตาม: </h5>
                            <h4><i class="fab fa-facebook" style="color: #2f55a4;"></i>&nbsp;Facebook : <?php echo $pro2->facebookCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-youtube" style="color: #FF0000;"></i>&nbsp;Youtube : <?php echo $pro2->youtubeCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-instagram" style="color: #C13584;"></i>&nbsp;Instragam : <?php echo $pro2->igCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-twitter" style="color: #1DA1F2;"></i>&nbsp;Twitter : <?php echo $pro2->twitterCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-twitch" style="color: #6441a5;"></i>&nbsp;Twitch : <?php echo $pro2->twitchCount; ?> ผู้ติดตาม</h4>
                            <h4><i class="fab fa-tiktok" style="color: #C13584;"></i>&nbsp;Tiktok : <?php echo $pro2->tiktokCount; ?> ผู้ติดตาม</h4>
                        </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                        <div class="" style="padding:5px;">
                            <h4 class="bold padding-bottom-7"><i class="fas fa-star"></i> 3<small></small></h4>
                        </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>จำนวนปีที่เป็นอินฟลูเอนเซอร์:</h5>
                        <h4><?php echo $pro2->time; ?> ปี</h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>
                    
                    <div class="" style="padding:5px">
                        <h5>คอนเทนต์:</h5>
                        <h4><?php echo $pro2->content; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>แพลตฟอร์ม:</h5>
                        <h4><?php echo $pro2->platform; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>แนวเกม:</h5>
                        <h4><?php echo $pro2->game; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>
                    
                    <div class="" style="padding:5px">
                        <h5>เกมที่ชอบ:</h5>
                        <h4><?php echo $pro2->love_game; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>

                    <div class="" style="padding:5px">
                        <h5>รายละเอียด:</h5>
                        <h4><?php echo $pro2->description; ?></h4>
                    </div>

                    <hr style="border-top:1px dotted #ccc; margin-top: 10px;"/>
                    <br>
                    <a href="profile.php?item_id=<?php echo $pro2->id; ?>" class="btn btn-primary bt4">ดูโปรไฟล์</a><br><br>

                </div>
            </div>

        </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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

<div class="footer-basic">
    <footer>
      <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
        <p class="copyright">© 2022 Lorem Ipsum. All Rights Reserved</p>
    </footer>
</div>
    
</body>
</html>