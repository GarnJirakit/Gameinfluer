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
    <link rel="stylesheet" href="css/ticket1.css">
    <link rel="stylesheet" href="css/logout.css">
    <link rel="stylesheet" href="css/script.js">
    <link rel="stylesheet" href="css/footer.css">

    <title>Gameinfluer</title>
    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">

</head>
<body>

<style>
    /* HIDE RADIO */
    [type=radio] { 
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
    }

    /* IMAGE STYLES */
    [type=radio] + img {
    cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked + img {
    background: #f00;
    border: 3px solid black;
    border-radius: 25px;
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
            <li><a href="index1.php">GAMEINFLUER</a></li>
        </ul>
            <ul class="nav navbar-nav navbar-center">
                <li><a href="compare1.php"><i class="fas fa-users"></i>&nbsp; รายชื่ออินฟลูเอนเซอร์</a></li>
                <li><a href="search1.php"><i class="fas fa-search"></i>&nbsp; ค้นหาอินฟลูเอนเซอร์</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="ticket1.php" class="active"><i class="fas fa-ticket-alt"></i>&nbsp;<?php echo $row['NumTicket']; ?>&nbsp;<i class="fas fa-plus-circle"></i></a></li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['name']; ?></button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="logout2.php">ออกจากระบบ</a>
                        </div>
                </div>
            </ul>
    </div>
</nav>

<div class="row justify-content-md-center box1">
    <h1 class="hd1">ซื้อตั๋วดูโปรไฟล์อินฟลูเอนเซอร์ที่ต้องการ</h1>
    <h4 class="hd2">สามารถซื้อตามราคาแพจเกจชุดต่าง ๆ</h4>

    <div class="container box3"> <br><br>

        <div class="row justify-content-md-center">  
            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://sv1.picz.in.th/images/2022/03/25/8zamKQ.png" alt="Card image cap" class="img-responsive"/>
                    <h4 class="card-text">1. เมื่อท่านต้องการตั๋วเพิ่มเติม<br>กดรูปบวกบนแถบเมนูด้านบน</h4>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://sv1.picz.in.th/images/2022/03/25/8zGFeI.png" alt="Card image cap" class="img-responsive"/>
                    <h4 class="card-text">2. ซื้อแพคเกจตั๋วราคาต่าง ๆ <br>ตามที่ต้องการ</h4>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://sv1.picz.in.th/images/2022/03/26/84YhiQ.png" alt="Card image cap" class="img-responsive"/>
                    <h4 class="card-text">3. ใช้ตั๋วเพื่อเลือกดูโปร์ไฟล์ <br> ที่ท่านต้องการ</h4>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Form -->

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 col-sm-8 col-xl-12 col-lg-12 col-md-12 font-poppins" style="padding-left:200px; padding-right:200px; padding-top:50px;  ">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <br>
                <h2 class="title colabout">&nbsp; เลือกสั่งซื้อชุดตั๋ว</h2>
                <br>

                    <form method="POST" action="submit_ticket.php">

                            <div class="col-12">
                                <div class="input-group " style="padding-left:140px; padding-right:100px;">
                                    <label>
                                        <input type="radio" name="ticket1" value="1" checked>
                                        <img src="images/ticket1.png" style="width:200px; height:200px;">
                                        <br>
                                        <br>
                                        <h3 class="card-title" style="text-align: center;">ตั๋ว 1 ใบ</h3>
                                        <h4 class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 1 THB</h4>
                                    </label>

                                    <label>
                                        <input type="radio" name="ticket1" value="5">
                                        <img src="images/ticket2.png" style="width:200px; height:200px;">
                                        <br>
                                        <br>
                                        <h3 class="card-title" style="text-align: center;">ตั๋ว 5 ใบ</h3>
                                        <h4 class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 5 THB</h4>
                                    </label>

                                    <label>
                                        <input type="radio" name="ticket1" value="20">
                                        <img src="images/ticket3.png" style="width:200px; height:200px;">
                                        <br>
                                        <br>
                                        <h3 class="card-title" style="text-align: center;">ตั๋ว 20 ใบ</h3>
                                        <h4 class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 20 THB</h4>
                                    </label>

                                    <label>
                                        <input type="radio" name="ticket1" value="50">
                                        <img src="images/ticket4.png" style="width:200px; height:200px;">
                                        <br>
                                        <br>
                                        <h3 class="card-title" style="text-align: center;">ตั๋ว 50 ใบ</h3>
                                        <h4 class="card-text" style="text-align: center;"><i class="fas fa-coins"></i> ราคา 50 THB</h4>
                                    </label>

                                </div>
                            </div>

                            <br>
                            <hr>
                            <br>
                            <h3 class="title colabout">จ่ายด้วยบัตรเครดิต/เดบิต</h3> 
                            <br>

                        <div class="container credit">

                            <div class="form-group col-lg-12" style="text-align: left;">
                                <label for="formGroupExampleInput">หมายเลขบัตร</label>
                                <input class="form-control" type="text" name="num" id="num" placeholder="0000 0000 0000 0000" maxlength="16">
                            </div>

                            <div class="form-group col-lg-12" style="text-align: left;">
                                <label for="formGroupExampleInput2">ชื่อบนบัตร</label>
                                <input type="text" class="form-control" name="name" id="name" id="formGroupExampleInput2" placeholder="ชื่อ นามสกุล">
                            </div>

                            <!-- <div class="form-group col-lg-6  " style="text-align: left;">
                                <label>วันที่บัตรหมดอาย</label>
                                <input type="tel" class="form-control" name="date" id="date" placeholder="MM/YY" size="6" minlength="5" maxlength="5">
                            </div> -->

                                <div class="form-group col-lg-4" style="text-align: left;">
                                    <label >เดือนที่บัตรหมดอายุ</label>
                                        <select name="month" id="month" class="form-control">
                                            <option value="month" selected disabled>month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                </div>

                                <div class="form-group col-lg-4" style="text-align: left;">
                                    <label>ปีที่บัตรหมดอายุ</label>
                                        <select name="year" id="year" class="form-control">
                                            <option value="year" selected disabled>year</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2030">2031</option>
                                        </select>
                                </div>

                            <div class="form-group col-lg-4" style="text-align: left;">
                                <label>รหัส CVC</label>
                                <input class="form-control" type="text" name="cvc" id="cvc" maxlength="3" placeholder="CVC">
                            </div>

                                <h5 style="color:white;">จ่ายด้วยบัตรเครดิต/เดบิต</h5>   
                        </div>

                        <div class="col-12" style="padding-top:50px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">ยืนยันการสั่งซื้อ</button>
                                <button onclick="location.href='ticket1.php'" class="btn btn-outline-secondary col-3" type="submit">ยกเลิก</button>
                            </div>

                        <!-- Button trigger modal -->
                            <!-- <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">ยืนยัน</button> -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="https://sv1.picz.in.th/images/2022/04/30/8Mzxle.png" width="170" height="170">
                                <h2>การสั่งซื้อเรียบร้อย!</h2>
                                <h4>จำนวนตั๋วที่ซื้อ ได้เพิ่มเข้าในบัญชีของคุณแล้ว</h4>
                            </div>
                            <div class="modal-footer" style="text-align: center;">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button> -->
                                <button style="border-radius: 50px;" type="submit" name="submit" class="btn btn-primary">ยืนยันเรียบร้อย</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        <script>
                            $("#deleteConfirmation").prependTo("body");
                        </script>
                                
                        <!-- <div class="col-12" style="padding-top:50px;">
                            <button class="btn btn-dark col-3" type="submit" name="submit" >ยืนยันการสั่งซื้อ</button>
                            <button onclick="location.href='ticket1.php'" class="btn btn-secondary col-3" type="submit">ยกเลิก</button>
                        </div> -->
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container box3"> <br><br>

        <!-- <div class="row justify-content-md-center">  
            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://sv1.picz.in.th/images/2022/01/14/nRlyoJ.png" alt="Card image cap" class="img-responsive"/>
                    <h4 class="card-text">1. เมื่อท่านต้องการตั๋วเพิ่มเติม<br>กดรูปบวกบนแถบเมนูด้านบน</h4>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://sv1.picz.in.th/images/2022/01/14/nRlyoJ.png" alt="Card image cap" class="img-responsive"/>
                    <h4 class="card-text">2. ซื้อแพคเกจตั๋วราคาต่าง ๆ <br>ตามที่ต้องการ</h4>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://sv1.picz.in.th/images/2022/01/14/nRlyoJ.png" alt="Card image cap" class="img-responsive"/>
                    <h4 class="card-text">3. ใช้ตั๋วเพื่อเลือกดูโปร์ไฟล์ <br> ที่ท่านต้องการ</h4>
                </div>
            </div>

        </div> -->
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

<div class="footer-basic">
    <footer>
        <div class="social"><i class="fab fa-facebook">&nbsp;&nbsp;</i><i class="fab fa-youtube"></i>&nbsp;&nbsp;<i class="fab fa-instagram"></i></div>
        <p class="copyright">© 2022 Gameinfluer. All Rights Reserved</p>
    </footer>
</div>
    
</body>
</html>