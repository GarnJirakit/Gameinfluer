<?php
include('config.php');
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
    <link rel="stylesheet" href="css/list2.css">
    <link rel="stylesheet" href="css/compare.css">

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
            <li><a href="#"><i class="fas fa-users"></i>&nbsp; รายชื่ออินฟลูเอนเซอร์</a></li>
            <li><a href="search1.php"><i class="fas fa-search"></i>&nbsp; ค้นหาอินฟลูเอนเซอร์</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fas fa-ticket-alt"></i>&nbsp;1&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-user-circle"></i>&nbsp;ชื่อเอเจนซี่</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row col-12 box2_5">
        <div class="col-lg-6">
             <h3><i class="far fa-user"></i> &nbsp;รายชื่ออินฟลูเอนเซอร์ 15 คน</h3>          
        </div>

        <div class="col-lg-6">
            <div class="md-form mt-0">
                <input class="form-control" type="text" placeholder="ค้นหาชื่ออินฟลูเอนเซอร์ ..." aria-label="Search">
            </div>
        </div>
    </div> <br><br>
    
    <?php
        require 'config.php';
            $query = "SELECT * FROM `ts_user`";
            $query_run = mysqli_query($db, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;

            if($check_faculty)
            {
                while($row = mysqli_fetch_array($query_run))
                    {
    ?>

    <div class="col-md-3">
        <div class="card">
            <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $row['nameinflu']; ?></h2>

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
                        <h2><?php echo $row['cost']; ?> ฿</h2>   
                        <h4></h4>
                        <a href="#" id="myBtn" class="btn btn-primary bt1">เปรียบเทียบ</a>
                        <h5></h5>
                        <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                </div>
        </div>
    </div>

    <?php
        }
            }
                else
            {
                echo "No Faculty Found";
        }
    ?>

  </div>
</div>

<div class="footer-basic">
    <footer>
      <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
        <p class="copyright">© 2021 Lorem Ipsum. All Rights Reserved</p>
      </footer>
  </div>

<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span> <br>
        <h3 style="float:left;">เปรียบเทียบอินฟลูเอนเซอร์</h3> <br><br><br><br>

            <div class="row">
                <div class="col col-lg-6 "><img src="https://sv1.picz.in.th/images/2022/01/20/nlir4f.jpg" alt="Snow" style="width:40%; border-radius: 100px;"></div>
                <div class="col col-lg-6 "><img src="https://sv1.picz.in.th/images/2022/01/20/nlivm0.jpg" alt="Snow" style="width:40%; border-radius: 100px;"></div>
            </div> <br>

            <div class="row">
                <div class="col col-lg-6 row1">REDDY</div>
                <div class="col col-lg-6 row1">GamingKnow</div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row2">2,500</div>
                <div class="col col-lg-6 row2">1,000</div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row1">51,320</div>
                <div class="col col-lg-6 row1">49,990</div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row2">
                    <div><i class="fab fa-facebook"></i> 51,000</div>
                    <div><i class="fab fa-youtube"></i> 180</div>
                    <div><i class="fab fa-instagram"></i> 140</div>
                </div>

                <div class="col col-lg-6 row2">
                    <div><i class="fab fa-facebook"></i> 48,000</div>
                    <div><i class="fab fa-youtube"></i> 57</div>
                    <div><i class="fab fa-instagram"></i> 135</div>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row1">
                    <div><i class="fas fa-star"></i> 4</div>
                    <div>คนให้รีวิว 2 คน</div>
                </div>
                <div class="col col-lg-6 row1">
                    <div><i class="fas fa-star"></i> 4</div>
                    <div>คนให้รีวิว 4 คน</div>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row2">5</div>
                <div class="col col-lg-6 row2">4</div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row1">รีวิว / แนะนำเกม</div>
                <div class="col col-lg-6 row1">รีวิว / แนะนำเกม</div>
            </div>
            
            <div class="row">
                <div class="col col-lg-6 row2">PC</div>
                <div class="col col-lg-6 row2">Smart Phone</div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row1">
                    <div>Shooting</div>
                    <div>RPG</div>
                </div>
                <div class="col col-lg-6 row1">
                    <div>MOBA</div>
                    <div>RPG</div>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-6 row2">
                    <div>Genshin Impact</div>
                    <div>Far Cry 6</div>
                </div>
                <div class="col col-lg-6 row2">
                    <div>ROV</div>
                    <div>ROV</div>
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
    
</body>
</html>