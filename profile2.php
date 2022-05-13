<!--- PHP ---->

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

    $id = "";
    if(isset($_GET["id"]))
    {
      $id = $_GET["id"];
    }

    $sql_query = "SELECT * FROM `ts_user` WHERE id = $id";
    $result = $db->query($sql_query);

?>

<!--- End PHP --->

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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/rating.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/logout.css">

    <script src="js/rating.js"></script>

    <title>Gameinfluer</title>
    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">

</head>
<body>
    
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
        <ul class="nav navbar-nav navbar-center">
            <li><a href="compare1.php"><i class="fas fa-users"></i>&nbsp; รายชื่ออินฟลูเอนเซอร์</a></li>
            <li><a href="search1.php" class="active"><i class="fas fa-search"></i>&nbsp; ค้นหาอินฟลูเอนเซอร์</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="ticket1.php"><i class="fas fa-ticket-alt"></i>&nbsp;<?php echo $row['ticket']; ?>&nbsp;<i class="fas fa-plus-circle"></i></a></li>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['name']; ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout2.php">ออกจากระบบ</a>
                    </div>
            </div>
        </ul>
    </div>
</nav><br>

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

<?php
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
    {
      ?>
        <div class="row justify-content-md-center">
            <div class="col col-lg-6 ">
              <h2><i class="far fa-user"></i>&nbsp;หน้าโปรไฟล์</h2>
            </div>

        </div> <br><br><br><br>

        <div class="row justify-content-md-center">
          <div class="col col-lg-6" style="">
            <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" style="width:70%; height:70%; border-radius: 25px; margin-left: 100px;"> 
          </div>

          <div class="col col-lg-6 head">
            <h1><?php echo $row['nameinflu']; ?></h1>
            <h3>เรทราคา: <?php echo $row['cost']; ?> ฿</h3>
            <h3>53,313</h3>
            <p>คนติดตามรวมทุกช่องทาง</p>

                <div class="row">
                  <a href="<?php echo $row['facebook'];?>">
                    <div class="col-lg-4 soical" style="">
                      <i class="fab fa-facebook" style="color:blue;"></i><span>&nbsp; 53K&nbsp;<i class="fas fa-user-friends"></i></span>
                    </div>
                  </a>

                  <a href="<?php echo $row['youtube'];?>">
                    <div class="col-lg-4 soical" style="">
                      <i class="fab fa-youtube" style="color:red;"></i><span>&nbsp; 179&nbsp;<i class="fas fa-user-friends"></i></span>
                    </div>
                  </a>

                  <a href="<?php echo $row['ig'];?>">
                    <div class="col-lg-4 soical" style="">
                      <i class="fab fa-instagram" style="color:#C13584;"></i><span>&nbsp; 456&nbsp;<i class="fas fa-user-friends"></i></span>
                    </div>
                  </a> 
                </div>

                  <div class="row">
                    <a href="<?php echo $row['twitter'];?>">
                      <div class="col-lg-4 soical" style="">
                        <i class="fab fa-twitter" style="color:#1DA1F2;"></i><span>&nbsp; 50&nbsp;<i class="fas fa-user-friends"></i></span>
                      </div>
                    </a>

                    <a href="<?php echo $row['twitch'];?>">
                      <div class="col-lg-4 soical" style="">
                        <i class="fab fa-twitch" style="color:#6441a5;"></i><span>&nbsp; 10&nbsp;<i class="fas fa-user-friends"></i></span>
                      </div>
                    </a>

                    <a href="<?php echo $row['tiktok'];?>">
                      <div class="col-lg-4 soical" style="">
                        <i class="fab fa-tiktok" style="color:#C13584;"></i><span>&nbsp; 5&nbsp;<i class="fas fa-user-friends"></i></span>
                      </div>
                    </a>
                  </div>
            </div>
        </div><br><br>

        <hr><br>

        <div class="row justify-content-md-center">
          <div class="col col-lg-6 ">
            <h3>รายละเอียด</h3> <br>
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

          <div class="col col-lg-6 tel" style="background-color: #E4E4E4; width: 250px; margin-left: 250px; padding-left: 30px; padding-bottom: 20px; padding-top: 20px; border-radius: 20px;">
            <h3>ช่องทางติดต่อ</h3> <br>
            <h4><i class="fas fa-mobile-alt"></i>&nbsp; เบอร์โทรติดต่อ</h4>
            <h4 style="font-weight: normal;"><?php echo $row['contact']; ?></h4> <br>

            <h4><i class="fas fa-at"></i>&nbsp; อีเมล</h4>
            <h4 style="font-weight: normal;"><?php echo $row['email']; ?></h4>
          </div>
        </div>

        <hr><br>

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

    <br><hr>

    <h3><i class="fas fa-play"></i> ตัวอย่างวิดีโอผลงานที่ได้จ้าง</h3><br>

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

    <br><hr>

    <?php
	include 'class/Rating.php';
	$rating = new Rating();
	$itemDetails = $rating->getItem($_GET['item_id']);
	foreach($itemDetails as $item){
		$average = $rating->getRatingAverage($item["id"]);
	?>	
	<?php } ?>	
	<?php	
	$itemRating = $rating->getItemRating($_GET['item_id']);	
	$ratingNumber = 0;
	$count = 0;
	$fiveStarRating = 0;
	$fourStarRating = 0;
	$threeStarRating = 0;
	$twoStarRating = 0;
	$oneStarRating = 0;	
	foreach($itemRating as $rate){
		$ratingNumber+= $rate['ratingNumber'];
		$count += 1;
		if($rate['ratingNumber'] == 5) {
			$fiveStarRating +=1;
		} else if($rate['ratingNumber'] == 4) {
			$fourStarRating +=1;
		} else if($rate['ratingNumber'] == 3) {
			$threeStarRating +=1;
		} else if($rate['ratingNumber'] == 2) {
			$twoStarRating +=1;
		} else if($rate['ratingNumber'] == 1) {
			$oneStarRating +=1;
		}
	}
	$average = 0;
	if($ratingNumber && $count) {
		$average = $ratingNumber/$count;
	}	
	?>		
	<br>		
	<div id="ratingDetails"> 		
		<div class="row">			
			<div class="col-sm-3">				
				<h4>Rating and Reviews</h4>
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>				
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if($i <= $averageRating) {
						$ratingClass = "btn-warning";
					}
				?>
				<button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
				  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				</button>	
				<?php } ?>				
			</div>
			<div class="col-sm-3">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating/5)*100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
				
				$fourStarRatingPercent = round(($fourStarRating/5)*100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
				
				$threeStarRatingPercent = round(($threeStarRating/5)*100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
				
				$twoStarRatingPercent = round(($twoStarRating/5)*100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
				
				$oneStarRatingPercent = round(($oneStarRating/5)*100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
				
				?>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
				</div>
				
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
				</div>
			</div>		
			<div class="col-sm-3">
            <button type="button" id="rateProduct" class="btn btn-info <?php if(!empty($_SESSION['userid']) && $_SESSION['userid']){ echo 'login';} ?>">Rate this product</button>
			</div>		
		</div>
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">		
				<?php
				$itemRating = $rating->getItemRating($_GET['item_id']);
				foreach($itemRating as $rating){				
					$date=date_create($rating['created']);
					$reviewDate = date_format($date,"M d, Y");						

				?>				
					<div class="row">
						<div class="col-sm-3">
							<div class="review-block-name">By <a href="#"><?php echo $rating['name']; ?></a></div>
							<div class="review-block-date"><?php echo $reviewDate; ?></div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<?php
								for ($i = 1; $i <= 5; $i++) {
									$ratingClass = "btn-default btn-grey";
									if($i <= $rating['ratingNumber']) {
										$ratingClass = "btn-warning";
									}
								?>
								<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>								
								<?php } ?>
							</div>
							<div class="review-block-title"><?php echo $rating['title']; ?></div>
							<div class="review-block-description"><?php echo $rating['comments']; ?></div>
						</div>
					</div>
					<hr/>					
				<?php } ?>
				</div>
			</div>
		</div>	
	</div>
	<div id="ratingSection" style="display:none;">
		<div class="row">
			<div class="col-sm-12">
				<form id="ratingForm" method="POST">					
					<div class="form-group">
						<h4>Rate this product</h4>
						<button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="influId" name="influId" value="<?php echo $_GET['item_id']; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>		
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
					</div>			
				</form>
			</div>
		</div>		
	</div>
	<!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Login to rate this product</h1><br>
				<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
				<form method="post" id="loginForm" name="loginForm">
					<input type="text" name="user" placeholder="Username" required>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="hidden" name="action" value="userLogin">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">					 
				</form>
				<div class="login-help">					
					<p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p>
				</div>
			</div>
		</div>
	</div> -->

    <!-- <div class="row justify-content-md-center">
        <div class="col col-lg-6 ">
            <h3>รีวิวความคิดเห็น</h3>
        </div>

        <div class="col col-lg-6">
            <button id="myBtn"><i class="fas fa-star"></i>&nbsp; ให้คะแนนรีวิว</a>
        </div>
    </div>

    <h2>3 / 5</h2>
    <h2 class="fa fa-star checked" style="color:orange;"></h2>
    <h2 class="fa fa-star checked" style="color:orange;"></h2>
    <h2 class="fa fa-star checked" style="color:orange;"></h2>
    <h2 class="far fa-star"></h2>
    <h2 class="far fa-star"></h2>
    <p>มีรีวีวทั้งหมด 2 คน</p> <br>
      
    <div class="row justify-content-md-center">
        <div class="col col-lg-6 ">
            <h4>เอเจนซี่_01</h4>
            <h5>14 สิงหาคม 2021</h5>
                <div>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                </div>
        </div>

        <div class="col col-lg-6">
            <h4>ส่งงานตรงเวลา</h4>
            <h5 style="font-weight: normal;">กำหนดระยะส่งงานวันที่ได้วางไว้ และเขาก็สามารถส่งงานตามนั้นแบบตรงเวลาเป๊ะจริง ๆ นับถือความตั้งใจและตรงต่อเวลาครับผม</h5>
        </div>
    </div> <br>

    <hr> <br>
    
    <div class="row justify-content-md-center">
        <div class="col col-lg-6 ">
            <h4>เอเจนซี่_0201</h4>
            <h5>15 ตุลาคม 2021</h5>
                <div>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="fa fa-star checked" style="color:orange;"></h5>
                    <h5 class="far fa-star"></h2>
                </div>
        </div>

        <div class="col col-lg-6">
            <h4>พูดคุยอัธยาศัยดี</h4>
            <h5 style="font-weight: normal;">เป็นกันเอง ลงท้ายคำว่าครับตลอด แถมพิมพ์ข้อความต่าง ๆ ที่อ่านง่ายและเข้าใจอย่างชัดเจน ทำให้การพูดคุยงานเป็นไปอย่างราบรื่น ต่อเวลาครับผม</h5>
        </div>
    </div> -->

        <?php
    }
  }

?>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span> <br>
        <h2 style="float:left;">รีวิวความคิดเห็น</h2> <br><br><br><br>
        <h5 style="float:left;">ระดับความพึงพอใจ</h5> <br><br>
            <div class="rate col-3">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div> <br><br><br>

        <h5 style="float:left;">หัวข้อแสดงความคิดเห็น</h5> <br><br>
        <div class="fieldset" style="float:left;">
            <textarea name="reviewComments" id="reviewComments" cols="80" rows="5" required=""></textarea>
        </div>

        <div style="height:120px;"></div>
        <a href="dashboard.php" style="float:left;" class="btn btn-dark" type="submit">ยืนยันการให้รีวิว</a>
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