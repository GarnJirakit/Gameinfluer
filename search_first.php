<?php
  include('config.php');
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

    <!-- -------------fontawsome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- -------------css------------- -->
    <link rel="stylesheet" href="css/search1.css">

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
            <li><a href="#"><i class="fas fa-ticket-alt"></i>&nbsp;1&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-user-circle"></i>&nbsp;ชื่อเอเจนซี่</a></li>
        </ul>
    </div>
</nav>

<div class="container">
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h2><i class="fas fa-search"></i> Filters</h2>
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

                <h5>Budget ขั้นต่ำที่ต้องการ (บาท):</h5>
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
            <h2><i class="fa fa-file-o"></i> ผลการค้นหาอินฟลูเอนเซอร์</h2>
            <hr>

                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" style="width: 53em;" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="ค้นหาอินฟลูเอนเซอร์ ...">
                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                    </div>
            </form>

            <br>
            <div class="padding"></div>
    
            <div class="row">

              <!-- BEGIN ORDER RESULT -->
              <div class="col-sm-6">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    เรียงตาม <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Rating</a></li>
                  </ul>
                </div>
              </div>
              <!-- END ORDER RESULT -->
              
              <div class="col-md-6 text-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                  <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>
                </div>
              </div>
            </div>

                <hr>
                
                <div class="text-center">
                    <img src="images/loader.gif" id="loader" width="200" style="display:none;">
                </div>
                <div class="row" id="result">
                    <?php
                        $sql = "SELECT * FROM `ts_user`";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                        <div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="https://drink-space.com/wp-content/uploads/2021/02/236831.png" class="card-img-top" width="200px" height="200px">
                                    
                                    <h6 style="margin-top:5px;" class="text-light bg-info text-center rounded p-1"><?= $row['nameinflu']; ?></h6>
                                    
                                    <div class="card-body">
                                        <h4 class="card-title text-danger">ราคา : <?=number_format($row['cost']); ?>/-</h4>
                                        <p>
                                            Platform : <?= $row['platform']; ?><br>
                                            Gender : <?= $row['gender']; ?><br>
                                            Content : <?= $row['content']; ?><br>
                                            game : <?= $row['game']; ?><br>
                                        </p>
                                        <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="https://drink-space.com/wp-content/uploads/2021/02/236831.png" class="card-img-top" width="200px" height="200px">
                                    
                                        <h2 style="margin-top:5px;" class="text-light text-center rounded p-1"><?php
                                            $nameinflu=$row['nameinflu'];
                                            $string = $nameinflu;
                                            echo $string[0];                 // a

                                            ?></h2>
                                    
                                    <div class="card-body">
                                        <h4 class="card-title text-danger">ราคา : <?=number_format($row['cost']); ?>/-</h4>
                                        <p>
                                            Platform : <?= $row['platform']; ?><br>
                                            Gender : <?= $row['gender']; ?><br>
                                            Content : <?= $row['content']; ?><br>
                                            game : <?= $row['game']; ?><br>
                                        </p>
                                        <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <?php } ?>
                </div>
            </div>

        </div>
    </div>
                        </div>

                            <!-- <div class="col-md-3 mb-2">
                                <div class="card-deck">
                                  <img src="images/<?= $row['image']; ?>" class="card-img-top" alt="" width="200px" height="200px">
                                    <div class="card-body">
                                      <h2 class="card-title"><?= $row['nameinflu']; ?></h2>

                                      <div class="row col-12">
                                        <div class="col-lg-6">
                                          <h4>5K&nbsp;<i class="far fa-user"></i></h4>    
                                          <h5>ผู้ติดตาม</h5>      
                                        </div>

                                        <div class="col-lg-6">
                                          <h4>4(2)&nbsp;<i class="fas fa-star"></i></h4>    
                                          <h5>คะแนนรีวิว</h5>  
                                          </div>
                                        </div>

                                        <hr style="border: 0.1px solid grey;">
                                        <h4><i class="fas fa-coins"></i>&nbsp;เรทราคา</h4>  
                                        <h2><?=number_format($row['cost']); ?> ฿</h2>   
                                        <h4></h4>
                                        <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                                </div>
                            </div> -->

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
                    url:'action2.php',
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

<div class="footer-basic">
  <footer>
    <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
      <p class="copyright">© 2021 Lorem Ipsum. All Rights Reserved</p>
  </footer>
</div>
    
</body>
</html>