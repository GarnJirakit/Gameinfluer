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
            <li><a href="list2.php"><i class="fas fa-users"></i>&nbsp; รายชื่ออินฟลูเอนเซอร์</a></li>
            <li><a href="search1.php"><i class="fas fa-search"></i>&nbsp; ค้นหาอินฟลูเอนเซอร์</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fas fa-ticket-alt"></i>&nbsp;1&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a></li>
        </ul>
    </div>
</nav>

<div class="container">
  <div class="row">

    <!-- BEGIN SEARCH RESULT -->
    <div class="col-md-12">
      <div class="grid search">
        <div class="grid-body">
          <div class="row">

            <!-- BEGIN FILTERS -->
            <div class="col-md-3">
              <h2 class="grid-title"><i class="fas fa-search"></i> Filters</h2>
              <hr>

              <!-- BEGIN FILTER BY CATEGORY -->
              <h4>โซเชียลมีเดีย:</h4>
                <div class="checkbox">
                <label><input type="checkbox" class="icheck" > Facebook</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Youtube</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Instagram</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Twitch</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Twitter</label>
            </div>
              <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>

            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>รูปแบบคอนเทนต์ที่สนใจ:</h4>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck" id="content" name="content" value="ข่าวสาร / PR"> ข่าวสาร</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck" id="content" name="content" value="รีวิว / แนะนำเกม"> รีวิว</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck" id="content" name="content" value="บทความ / สาระความ"> บทความ</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck" id="content" name="content" value="ไลฟ์สตรีมเล่นเกม"> ไลฟ์สตรีม</label>
            </div>
            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>

            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>แพลตฟอร์มเกมที่สนใจ:</h4>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> PC</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> PlayStation</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Xbox</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Nintendo Switch</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Smart Phone</label>
            </div>
            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>

            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>ประเภทเกมที่สนใจ:</h4>
            <select class="form-control select2" multiple="multiple" style="width: 100%;"></select>

            <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

            <script>
              $('.select2').select2({
              data: ["Action", "Adventure", "Battle Royale", "Fighting", "MOBA", "MMO", "Platform", "Puzzle", "Racing", "Rhythm", "RPG", "RTS", "Sandbox", "Shooter", "Simulation", "Sports", "Stealth", "Survival", "Survival horror"],
              tags: true,
              maximumSelectionLength: 10,
              tokenSeparators: [',', ' '],
              placeholder: "เลือกประเภทได้มากกว่า 1 อย่าง ..."
              });
            </script>
            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>
            
            <!-- BEGIN FILTER BY DATE -->
            <h4>งานสำหรับคนติดตาม:</h4>
              จาก
            <div class="input-group">
              <input type="text" class="form-control">
            </div>
              ถึง
            <div class="input-group">
              <input type="text" class="form-control">
            </div>
            <!-- END FILTER BY DATE -->
            
            <div class="padding"></div>

            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>งานสำหรับเพศ:</h4>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> ชาย</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> หญิง</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> LGBTQ+</label>
            </div>
            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>
            
            <!-- BEGIN FILTER BY DATE -->
            <h4>Budget ขั้นต่ำที่ต้องการ (บาท):</h4>
              จาก
            <div class="input-group">
              <input type="text" class="form-control">
            </div>
              ถึง
            <div class="input-group">
              <input type="text" class="form-control">
            </div>
            <!-- END FILTER BY DATE -->

          </div>
          <!-- END FILTERS -->

          <!-- BEGIN RESULT -->
          <div class="col-md-9">
            <h2><i class="fa fa-file-o"></i> ผลการค้นหาอินฟลูเอนเซอร์</h2>
            <hr>
            <!-- BEGIN SEARCH INPUT -->

            <form action="" method="GET">
              <div class="input-group mb-3">
                <input type="text" name="search" style="width: 53em;" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="ค้นหาอินฟลูเอนเซอร์ ...">
                <button type="submit" class="btn btn-primary">ค้นหา</button>
               </div>
            </form>

            <!-- <div class="input-group">
              <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="ค้นหาชื่ออินฟลูเอนเซอร์ ...">
              <span class="input-group-btn">
                <button class="btn btn-dark" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div> -->
            <!-- END SEARCH INPUT -->

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
            
            <!-- BEGIN TABLE RESULT -->
            <div class="table-responsive">
              <table class="table table-hover">
                <div class="col-md-12">
                  <div class="card mt-4">
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr></tr>     
                        </thead>
                        <tbody>
                          <?php
                            $con = mysqli_connect("localhost","root","","gameinfluer");
                            if(isset($_GET['search']))
                            {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM `ts_user` WHERE CONCAT(name,email,contact) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                              {
                                foreach($query_run as $item)
                              {
                          ?>
                            <tr>
                              <div class="col-md-3">
                                <div class="card">
                                  <img src="images/<?php echo $item['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>" width="200px" height="200px">
                                    <div class="card-body">
                                      <h2 class="card-title"><?php echo $item['name']; ?></h2>

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
                                        <h2><?php echo $item['cost']; ?> ฿</h2>   
                                        <h4></h4>
                                        <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                                </div>
                              </div>
                            </tr>
  
                            <?php
                                }
                              }
                              else
                              {
                            ?>
                              <tr>
                                <td colspan="4">ไม่พบเจอ</td>
                              </tr>
                            <?php
                                }
                              }
                            ?>

                        <tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </table>
            </div>
            <!-- END TABLE RESULT -->
            
          </div>
          <!-- END RESULT -->
          
        </div>
      </div>
    </div>
  </div>
  <!-- END SEARCH RESULT -->
</div>
</div>

<script>
  function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
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