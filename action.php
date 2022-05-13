<?php
    include('config.php');

    if(!isset($_SESSION['loggedinId']))
    {
        session_start();
        header('location:login2.php');
    }

    if(isset($_REQUEST['submit']))
    {
        $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket - 1 WHERE id = '".$userId."'");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('Location: profile.php?item_id='.$id);
        // header('location:ticket1.php');

        exit;
    }

    $userId=$_SESSION['loggedinId'];
    $getData=mysqli_query($db,"SELECT * FROM `ts_brand` WHERE `id`='$userId'");
    $row=mysqli_fetch_assoc($getData);
    

    if(isset($_POST['action'])){
        $sql = "SELECT * FROM `ts_user` WHERE platform !=''";

        if(isset($_POST['platform'])){
            $platform = implode("','", $_POST['platform']);
            $sql .="AND platform IN('".$platform."')";
        }

        if(isset($_POST['gender'])){
            $gender = implode("','", $_POST['gender']);
            $sql .="AND gender IN('".$gender."')";
        }

        if(isset($_POST['content'])){
            $content = implode("','", $_POST['content']);
            $sql .="AND content IN('".$content."')";
        }

        if(isset($_POST['game'])){
            $game = implode("','", $_POST['game']);
            $sql .="AND game IN('".$game."')";
        }
        

        $result = $db->query($sql);
        $output = '';

        if($result->num_rows>0){

            include 'class/Rating.php';
            $rating = new Rating();
            $itemList = $rating->getItemList();
            foreach($itemList as $row){
            $average = $rating->getRatingAverage($row["id"]);

            while($row=$result->fetch_assoc()){
                $output .=
                '<div class="col-md-3 mb-2">
                <div class="card-deck" style="border: 2px solid #ccc; border-radius: 3px; padding: 10px;">
                    <div class="card border-secondary">
                        <img src="images/'.$row['image'].'" class="card-img-top" width="160px" height="160px">
      
                            <h2 style="margin-top:5px;" class="text-light text-center rounded p-1">
                                <?php
                                    $nameinflu='.$row['nameinflu'].';
                                    echo mb_substr($nameinflu, 0, 1); 
                                ?>***
                            </h2>

                            <div class="card-body">
                            <div class="row col-12">
                                <div class="col-lg-6" style="margin-left: 15px; width: 40%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:15px;">
                                    <h4>5K&nbsp;<i class="fas fa-user"></i></h4>    
                                    <h6>ผู้ติดตาม</h6>      
                                </div>

                                <div class="col-lg-6" style="margin-left: 9px; width: 42%; text-align: center; background:rgb(226, 226, 226); border-radius: 10px; padding-left:10px;">
                                <h4 class="bold padding-bottom-7"><i class="fas fa-star"></i>4.0<small></small></h4> 
                                    <h6>คะแนนรีวิว</h6>  
                                </div>
                            </div>

                            <hr style="border: 0.1px solid grey;">
                            <h4 style="text-align: center;"><i class="fas fa-coins"></i>&nbsp;เรทราคา</h4>  
                            <h5 style="text-align: center; height: 1px;">เริ่มต้น</h5>
                            <h2 style="text-align: center; height: 40px;">'.number_format($row['cost']).'</h2>
                            <h5 style="text-align: center; height: 5px;">ถึง</h5>
                            <h2 style="text-align: center;">'.number_format($row['cost2']).'</h2> 
                            <h4 style="text-align: center;">บาท</h4>  
                            <h4></h4>

                            <div style="height:5px;"></div>
                            <form method="POST" action="submit_ticket2.php" enctype="multipart/form-data">
                                <button type="submit" name="submit" class="btn btn-primary bt2">ใช้ตั๋วเพื่อดูโปรไฟล์ <i class="fas fa-ticket-alt"></i>&nbsp;-1</button>
                            </form>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>'
            ;
            }
        }
        }   
        else{
            $output = "<h3>ไม่มีอินฟลูเอนเซอร์ตามต้องการ !</h3>";
        }
        echo $output;
    }
?>

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