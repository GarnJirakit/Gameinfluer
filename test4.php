<?php
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
            <li><a href="compare1.php"><i class="fas fa-users"></i>&nbsp; ???????????????????????????????????????????????????????????????</a></li>
            <li><a href="search1.php" class="active"><i class="fas fa-search"></i>&nbsp; ?????????????????????????????????????????????????????????</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="ticket1.php"><i class="fas fa-ticket-alt"></i>&nbsp;<?php echo $row['ticket']; ?>&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['name']; ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout2.php">??????????????????????????????</a>
                    </div>
            </div>
        </ul>
    </div>
</nav>

<div class="container">
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h3><i class="fas fa-search"></i> Filters</h3>
                <hr>

                <h5>??????????????????????????????????????? :</h5>
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

                <h5>??????????????????????????????????????????????????????????????? :</h5>
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

                <h5>????????????????????????????????????????????????????????? :</h5>
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

                <h5>???????????????????????????????????????????????? :</h5>
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

                <h5>???????????????????????????????????????????????????:</h5>
                <h6>?????????</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>
                <h6>?????????</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>

                <h5>????????????????????????????????????:</h5>
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

                <h5>Budget ??????????????????????????????????????????????????? (?????????):</h5>
                <h6>?????????</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>
                <h6>?????????</h6>
                <div class="input-group">
                    <input type="text" class="form-control">
                </div>

            </div>

            <div class="col-lg-9">
            <h3><i class="fa fa-file-o"></i> ????????????????????????????????????????????????????????????????????????</h3>
            <hr>

                <!-- <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" style="width: 53em;" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="????????????????????????????????????????????????????????? ...">
                        <button type="submit" class="btn btn-primary">???????????????</button>
                    </div>
            </form> -->

            <br>
            <div class="padding"></div>
    
            <div class="row">

              <!-- BEGIN ORDER RESULT -->
              <!-- <div class="col-sm-6">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    ???????????????????????? <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Rating</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- END ORDER RESULT -->
              
              <!-- <div class="col-md-6 text-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                  <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>
                </div>
              </div>
            </div> -->

                <!-- <hr> -->
                
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
                                                <h4>5K&nbsp;<i class="fas fa-user"></i></h4>    
                                                <h6>???????????????????????????</h6>      
                                            </div>

                                            <div class="col-lg-6" style="margin-left: 9px; width: 42%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:10px;">
                                                <h4>4(2)<i class="fas fa-star"></i></h4>    
                                                <h6>??????????????????????????????</h6>  
                                            </div>
                                        </div>
                                        <hr style="border: 0.1px solid grey;">
                                        <h4 style="text-align: center;"><i class="fas fa-coins"></i>&nbsp;?????????????????????</h4>  
                                        <h2 style="text-align: center;"><?=number_format($row['cost']); ?> ???</h2>   
                                        <h4></h4>

                                        <div style="height:5px;"></div>
                                        <a href="profile.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary bt2">???????????????????????????</a>
                                        <!-- <a href="#" id="myBtn" data-target="#myModal" class="btn btn-primary bt2">???????????????????????????</a> -->
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
                                        <h4 class="card-title text-danger">???????????? : <?=number_format($row['cost']); ?>/-</h4>
                                        <p>
                                            Platform : <?= $row['platform']; ?><br>
                                            Gender : <?= $row['gender']; ?><br>
                                            Content : <?= $row['content']; ?><br>
                                            game : <?= $row['game']; ?><br>
                                        </p>
                                        <a href="#" class="btn btn-primary bt2">???????????????????????????</a>
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
                                          <h5>???????????????????????????</h5>      
                                        </div>

                                        <div class="col-lg-6">
                                          <h4>4(2)&nbsp;<i class="fas fa-star"></i></h4>    
                                          <h5>??????????????????????????????</h5>  
                                          </div>
                                        </div>

                                        <hr style="border: 0.1px solid grey;">
                                        <h4><i class="fas fa-coins"></i>&nbsp;?????????????????????</h4>  
                                        <h2><?=number_format($row['cost']); ?> ???</h2>   
                                        <h4></h4>
                                        <a href="#" class="btn btn-primary bt2">???????????????????????????</a>
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
        <h3>????????????????????????????????????????????????????????????????????????????????????????????? ?</h3>
      </div>
      <div class="modal-footer">
        <a href="search1.php" class="btn btn-secondary col-3 popbut" type="submit">??????????????????</a>
        <a href="profile.php?id=<?php echo $row['id']; ?>" class="btn btn-dark col-3 popbut" type="submit">???????????? <i class="fas fa-ticket-alt"></i>&nbsp;-1</a>&nbsp;&nbsp;</a>
      </div>
    </div>
  </div>
</div>

    <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>????????????????????????????????????????????????????????????????????????????????????????????? ?</h2> <br>
            <div class="col-12">
                <a href="profile.php?id=<?php echo $row['id']; ?>" class="btn btn-dark col-3 popbut" type="submit">???????????? <i class="fas fa-ticket-alt"></i>&nbsp;-1</a>&nbsp;&nbsp;
                <a href="search1.php" class="btn btn-secondary col-3 popbut" type="submit">??????????????????</a>
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
      <p class="copyright">?? 2021 Lorem Ipsum. All Rights Reserved</p>
  </footer>
</div>
    
</body>
</html>