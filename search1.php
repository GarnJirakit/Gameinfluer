<?php
    include('config.php');

    $userId=$_SESSION['loggedinId'];
    $query = "SELECT sum(facebookCount + youtubeCount + igCount + twitterCount + twitchCount + tiktokCount) FROM `ts_user` WHERE `id`='$userId'";
    $qresult = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($qresult);
    $count = $row["sum(facebookCount + youtubeCount + igCount + twitterCount + twitchCount + tiktokCount)"];

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

    if(!isset($_SESSION['loggedinId']))
    {
        session_start();
        header('location:login2.php');
    }

    // if(isset($_REQUEST['submit']))
    // {
    //     $ticket=$_REQUEST['NumTicket'];
    
    //     $userId=$_SESSION['loggedinId'];
    //     $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket - 1 WHERE id = '".$userId."'");

    //     $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
    //     header('Location: profile.php?item_id='.$id);
    //     header('location:ticket1.php');
       

    //     exit;
    // }

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

    <script src="js/rating.js"></script>

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
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h3><img src="https://media.baamboozle.com/uploads/images/338081/1618820906_82532_gif-url.gif" width="40">Filters</h3>
                <hr>

                <h5>โซเชียลมีเดีย :</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="Facebook" id="content">&nbsp; Facebook
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="Youtube" id="content">&nbsp; Youtube
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="Instagram" id="content">&nbsp; Instagram
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="Twitch" id="content">&nbsp; Twitch
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="Twitter" id="content">&nbsp; Twitter
                            </label>
                        </div>
                    </li>
                </ul>

                <h5>งานสำหรับเพศ:</h5>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT gender FROM `ts_user`ORDER BY gender";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['gender']; ?>" id="gender">&nbsp; <?= $row['gender']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h5>รูปแบบคอนเทนต์ที่สนใจ :</h5>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT content FROM `ts_user`ORDER BY content";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['content']; ?>" id="content">&nbsp; <?= $row['content']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h5>แพลตฟอร์มเกมที่สนใจ :</h5>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT platform FROM `ts_user`ORDER BY platform";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['platform']; ?>" id="platform">&nbsp; <?= $row['platform']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h5>ประเภทเกมที่สนใจ :</h5>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT game FROM `ts_user`ORDER BY game";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 13px; font-weight: 500;">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['game']; ?>" id="game">&nbsp; <?= $row['game']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h5>งานสำหรับคนติดตาม:</h5>
                <h6>จาก</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>
                <h6>ถึง</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>

                <h5>เรทราคาต้องการ (บาท):</h5>
                <h6>จาก</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>
                <h6>ถึง</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>

            </div>

                <div class="col-lg-9">
                    <h3><i class="fa fa-file-o"></i> ผลการค้นหาอินฟลูเอนเซอร์</h3>
                    <hr>

                    <br>
                    
                        <div class="padding"></div>
    
                         <div class="row">
                
                        <div class="text-center">
                            <img src="images/loader.gif" id="loader" width="200" style="display:none;">
                        </div>

                        <div class="row" id="result">
            
                            <?php
                                include 'class/Rating.php';
                                $rating = new Rating();
                                $itemList = $rating->getItemList();
                                foreach($itemList as $row){
                                 $average = $rating->getRatingAverage($row["id"]);
                            ?>

                            <div class="col-md-3 mb-2">
                                <div class="card-deck" style="border: 2px solid #ccc; border-radius: 3px; padding: 10px;">
                                    <div class="card border-secondary">
                                        <img src="images/<?= $row['image']; ?>" class="card-img-top" width="160px" height="160px">
                                            
                                            <h2 style="margin-top:5px;" class="text-light text-center rounded p-1">
                                                <?php
                                                    $nameinflu=$row['nameinflu'];  
                                                    echo mb_substr($nameinflu, 0, 1); 
                                                ?>***
                                            </h2>
                                            
                                            <div class="card-body">
                                                <div class="row col-12">
                                                    <div class="col-lg-6" style="margin-left: 15px; width: 40%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:15px;">
                                                        <h4>5K <i class="fas fa-user"></i></h4>   
                                                        <!-- <h4><?php echo abbreviateNumber($count); ?><i class="fas fa-user"></i></h4>     -->
                                                        <h6>ผู้ติดตาม<h6>    
                                                    </div>

                                                    <div class="col-lg-6" style="margin-left: 9px; width: 42%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:10px;">
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
                                                <form method="POST" action="submit_ticket2.php" enctype="multipart/form-data">
                                                    <button type="submit" name="submit" class="btn btn-primary bt2">ใช้ตั๋วเพื่อดูโปรไฟล์ <i class="fas fa-ticket-alt"></i>&nbsp;-1</button>
                                                    <!-- <button type="submit" name="submit" class="btn btn-dark col-3 popbut">ใช้ตั๋วเพื่อดูโปรไฟล์ <i class="fas fa-ticket-alt"></i>&nbsp;-1</button>&nbsp;&nbsp; -->
                                                    <!-- <a href="profile.php?item_id=<?php echo $row['id']; ?>" type="submit" name="submit" class="btn btn-primary bt2">ใช้ตั๋วเพื่อดูโปรไฟล์  <i class="fas fa-ticket-alt"></i>&nbsp;-1</a> -->
                                                    <!-- <button type="submit" name="submit" class="btn btn-dark col-3 popbut">ใช้ตั๋วเพื่อดูโปรไฟล์ <i class="fas fa-ticket-alt"></i>&nbsp;-1</button>&nbsp;&nbsp; -->
                                                </form>

                                                <br>
                                                <br>
                                            </div>
                                    </div>
                                </div>
                            </div>

                                
                            <?php } ?>
                    
                        </div>
                </div>

        </div>
    </div>
                        </div>

                            

    <script type="text/javascript">
        $(document).ready(function(){

            $(".product_check").click(function(){
                $("#loader").show();

                var action = 'data';
                var platform = get_filter_text('platform');
                var gender = get_filter_text('gender');
                var content = get_filter_text('content');
                var game = get_filter_text('game');

                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:{action:action,platform:platform,gender:gender,content:content,game:game},
                    success:function(response){
                        $("#result").html(response);
                        $("#loader").hide();
                        $("#textChange").text("Filtered Products");
                    }
                });
            });

                function get_filter_text(text_id){
                    var filterData = [];
                    $('#'+text_id+':checked').each(function(){
                        filterData.push($(this).val());
                    });
                    return filterData;
                }
        });
    </script>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <h3>ต้องการดูโปรไฟล์คนนี้ใช่หรือไม่ ?</h3>
      </div>
      <div class="modal-footer">
        <a href="search1.php" class="btn btn-secondary col-3 popbut" type="submit">ยกเลิก</a>
        <a href="profile.php?item_id=<?php echo $row['id']; ?>" class="btn btn-dark col-3 popbut" type="submit">ตกลง <i class="fas fa-ticket-alt"></i>&nbsp;-1</a>&nbsp;&nbsp;</a>
      </div>
    </div>
  </div>
</div>

    <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>ต้องการดูโปรไฟล์คนนี้ใช่หรือไม่ ?</h2> <br>
            <div class="col-12">
                <a href="profile.php?item_id=<?php echo $row['id']; ?>" class="btn btn-dark col-3 popbut" type="submit">ตกลง <i class="fas fa-ticket-alt"></i>&nbsp;-1</a>&nbsp;&nbsp;
                <a href="search1.php" class="btn btn-secondary col-3 popbut" type="submit">ยกเลิก</a>
         </div>
</div>
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

</div>



<div class="footer-basic">
  <footer>
    <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
      <p class="copyright">© 2021 Lorem Ipsum. All Rights Reserved</p>
  </footer>
</div>
    
</body>
</html>