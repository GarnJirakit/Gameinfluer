<?php
$con = mysqli_connect("localhost","root","","gameinfluer");

include('config.php');

$userId=$_SESSION['loggedinId'];
$query = "SELECT facebookCount, youtubeCount, igCount, twitterCount, twitchCount, tiktokCount FROM `ts_user` WHERE `id`='$userId'";
$qresult = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($qresult);
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
        header('location:login2.php');
    }

    $userId=$_SESSION['loggedinId'];
    $getData=mysqli_query($db,"SELECT * FROM `ts_brand` WHERE `id`='$userId'");
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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

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
        .card{
            border: 2px solid #ccc; border-radius: 3px; padding: 10px;
        }
        .card_check{
            border: 3px solid red;
        }
        .compare {
            cursor: pointer;
        }
        .compare:hover {
            background: red;
            color: white;
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
<div class="row col-12 box2_5">
        <div class="col-lg-6">
            <h3><img src="https://zellusmarketing.com/wp-content/uploads/2021/03/icon-1.1s-257px-1.gif" width="45"> รายชื่ออินฟลูเอนเซอร์</h3>          
        </div>

        <div class="col-lg-6">
            <div class="md-form mt-0">
                <input class="form-control" type="text" placeholder="ค้นหาชื่ออินฟลูเอนเซอร์ ..." aria-label="Search">
            </div>
        </div>
    </div> 

    <div class="row" id="btn_compare" style="display:none;">
        <div class="col-sm-12" style="margin-top: 50px;">
            <form action="compare.php" method="post">
                <input type="hidden" value="" id="card_one" name="card_one"/>
                <input type="hidden" value="" id="card_two" name="card_two"/>
                <input type="submit" value="ผลการเปรียบเทียบ" class="btn btn-success" style="float:right; font-size:20px;"/>
            </form>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <?php
           include 'class/Rating.php';
           $rating = new Rating();
           $itemList = $rating->getItemList();
           foreach($itemList as $row){
               $average = $rating->getRatingAverage($row["id"]);
        ?>
            <div class="col-sm-3" style="margin-bottom: 30px; padding: 5px;">
                <div class="card compare_card<?php echo $row['id']; ?>">
                    <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>" style="width:100%; height:250px;">
                    <br>
                    <h2 class="card-title"><?php echo $row['nameinflu']; ?></h2>
                    <div style="height:17px;"></div>

                    <div class="row col-12">
                        <div class="col-lg-6" style="margin-left: 15px; width: 40%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:15px;">
                            <h4>
                                <?php
                                    echo abbreviateNumber($count);
                                ?>
                            &nbsp;<i class="fas fa-user"></i></h4>    
                            <h6>ผู้ติดตาม</h6>      
                        </div>

                        <div class="col-lg-6" style="margin-left: 20px; width: 40%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:15px;">
                            <h4 class="bold padding-bottom-7"><i class="fas fa-star"></i> <?php printf('%.1f', $average); ?><small></small></h4>   
                            <h6>คะแนนรีวิว</h6>  
                        </div>
                    </div>

                    <hr style="border: 0.1px solid grey;">

                   
                                                <h4 style="text-align: center;"><i class="fas fa-coins"></i>&nbsp;เรทราคา</h4>  
                                                <h5 style="text-align: center; height: 1px;">เริ่มต้น</h5>
                                                <h2 style="text-align: center; height: 40px;"><?=number_format($row['cost']); ?></h2>
                                                <h5 style="text-align: center; height: 5px;">ถึง</h5>
                                                <h2 style="text-align: center;"><?=number_format($row['cost2']); ?></h2> 
                                                <h4 style="text-align: center;">บาท</h4>  
                                                <h4></h4>

                    <div style="height:5px;"></div>
                    <h4></h4>
                    <a class="btn btn-primary bt1" href="profile.php?item_id=<?php echo $row['id']; ?>" rel="<?php echo $row['id']; ?>">ดูโปรไฟล์</a>
                    <h5></h5>
                    <a class="btn btn-primary bt2 compare" rel="<?php echo $row['id']; ?>">เลือกเปรียบเทียบ</a>
                    <div style="height:20px;"></div>
                </div>
            </div>
            <?php
                }
            ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.compare',function(){
            var id = $(this).attr('rel');
            var size_class = $('.card_check').length;
            if(size_class > 1)
            {
                if($(".compare_card"+id).hasClass("card_check"))
                {
                    $(".compare_card"+id).removeClass("card_check");
                }
                else
                {
                    alert("You have alreay select maxium product");
                }
            }
            else
            {
                if(size_class>0)
                {
                    $('#btn_compare').show();
                }
                if($(".compare_card"+id).hasClass("card_check"))
                {
                    $(".compare_card"+id).removeClass("card_check");
                }
                else
                {
                    $(".compare_card"+id).addClass("card_check");

                    var pro1 = $('#card_one').val();
                    var pro2 = $('#card_two').val();

                    if(pro1=="")
                    {
                        $('#card_one').val(id);
                    }
                    else if(pro2=="")
                    {
                        $('#card_two').val(id);
                    }
                }
            }
        });
    });
</script>

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
        <p class="copyright">© 2021 Lorem Ipsum. All Rights Reserved</p>
    </footer>
</div>
    
</body>
</html>