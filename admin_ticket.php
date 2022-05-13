<?php
  include('config.php');

  if(isset($_GET['id'])) {
      $id=$_GET['id'];
      $delete=mysqli_query($db,"DELETE FROM `ts_user` WHERE `id`='$id'");
      header("location:admin.php");
  }

  if(!isset($_SESSION['loggedinId']))
    {
        session_start();
        header('location:admin_login.php');
    }

    $userId=$_SESSION['loggedinId'];
    $getData=mysqli_query($db,"SELECT * FROM `admin` WHERE `id`='$userId'");
    $row=mysqli_fetch_assoc($getData);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="https://sv1.picz.in.th/images/2022/01/28/nVtqzk.png" width="40" height="30" alt="" style="margin-top:5px;"> &nbsp;<span>Gameinfluer</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php"><span class="las la-user-astronaut"></span>
                    <span>อินฟลูเอนเซอร์</span></a>
                </li>
                <li>
                    <a href="admin_status.php"><span class="las la-user-astronaut"></span>
                    <span>สถานะอินฟลูเอนเซอร์</span></a>
                </li>
                <li>
                    <a href="admin_brand.php"><span class="las la-user-tie"></span>
                    <span>แบรนด์/เอเจนซี่</span></a>
                </li>
                <li>
                    <a href="admin_status2.php"><span class="las la-user-tie"></span>
                    <span>สถานะแบรนด์/เอเจนซี่</span></a>
                </li>
                <li>
                    <a href="admin_ticket.php" class="active"><span class="las la-ticket-alt"></span>
                    <span>ประวัติซื้อตั๋ว</span></a>
                </li>

                <br>
                <hr style="border-top:1px #ccc;"/>
                <br>
                
                <li>
                    <a href="admin_admin.php"><span class="las la-user-shield"></span>
                    <span>แอดมิน</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <!-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="ค้นหาที่นี่..."/>
            </div> -->

            <div class="user-wrapper">
                <img src="https://cdn0.iconfinder.com/data/icons/avatar-72/65/21-512.png" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo $row['name']; ?></h4>
                    <small><a href="logout3.php">ออกจากระบบ</a></small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ticket`";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?>
                        </h1>
                        <span>จำนวนครั้งที่สั่งซื้อตั๋ว</span>
                    </div>
                    <div>
                        <span class="las la-ticket-alt"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <p>ตั๋วชุดที่ 1 :
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ticket` WHERE ticket='1'";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?> ครั้ง
                        </p>  
                        <p>ตั๋วชุดที่ 2 :
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ticket` WHERE ticket='2'";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?> ครั้ง
                        </p> 
                        <p>ตั๋วชุดที่ 3 :
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ticket` WHERE ticket='3'";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?> ครั้ง
                        </p> 
                        <p>ตั๋วชุดที่ 4 :
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ticket` WHERE ticket='4'";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?> ครั้ง
                        </p> 
                    </div>
                        <span class="las la-ticket-alt" style="color: #FB4665; font-size: 3rem;"></span>
                    </div>

            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                        <h3 style="font-weight: normal;">รายการสั่งซื้อตั๋ว</h3>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                               <table width="100%">
                                   <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>ชุดตั๋ว</td>
                                            <td>เวลาสั่งซื้อ</td>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php
                                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");
                                                if($conn-> connect_error){
                                                die("Connection failed:".$conn-> connect_error);
                                                }
                                                $sql = "SELECT id, ticket, time FROM `ticket`";
                                                $result = $conn-> query($sql);

                                                if($result-> num_rows > 0){
                                                while($row = $result-> fetch_assoc()) {
                                                    echo "<tr>
                                                            <td>". $row["id"] ."</td>
                                                            <td>". $row["ticket"] ."</td>
                                                            <td>". $row["time"] ."</td>
                                                          </tr>";
                                                    }
                                                    echo "</table>";
                                                }
                                                else{
                                                echo "0 result";
                                                }
                                                $conn-> close();
                                            ?>
                                        </tbody>
                               </table>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    
</body>
</html>