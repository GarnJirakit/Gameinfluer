<?php
    include('config.php');

    if(!isset($_SESSION["type"]))
    {
        header("location:admin.php");
    }

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
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameinfluer</title>

    <link rel="shortcut icon" href="https://sv1.picz.in.th/images/2022/01/15/nx7YnI.png">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
                    <a href="admin_status.php" class="active"><span class="las la-user-astronaut"></span>
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
                    <a href="admin_ticket.php"><span class="las la-ticket-alt"></span>
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

    <br />
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

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
                <div class="card-single3">
                    <div>
                        <h1>
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ts_user` WHERE status='Active'";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?>
                        </h1>
                        <span>บัญชีสถานะ Active</span>
                    </div>
                    <div>
                        <span class="las la-check-circle"></span>
                    </div>
                </div>

                <div class="card-single2">
                    <div>
                        <h1>
                            <?php
                                $conn = mysqli_connect("localhost", "root", "", "gameinfluer");

                                $query = "SELECT count(*) FROM `ts_user` WHERE status='Inactive'";
                                $qresult = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($qresult);
                                $count = $row["count(*)"];
                                echo $count;   
                            ?>
                        </h1>
                        <span>บัญชีสถานะ Inactive</span>
                    </div>

                    <div>
                        <span class="las la-times-circle"></span>
                    </div>
                </div>
            </div>
        
            <?php
                if($_SESSION["type"] == "user")
                {
                    echo '<div align="center"><h2>Hi... Welcome User</h2></div>';
                }
                else
                {
            ?>

            <div class="panel panel-default">
                <div class="panel-heading"></div>
                    <div class="panel-body">
                        <span id="message"></span>
                        <div class="table-responsive" id="user_data">
        
                        </div>
                        <script>
                            $(document).ready(function(){
        
                                load_user_data();
        
                                function load_user_data()
                                {
                                    var action = 'fetch';
                                    $.ajax({
                                        url:'action4.php',
                                        method:'POST',
                                        data:{action:action},
                                        success:function(data)
                                            {
                                                $('#user_data').html(data);
                                            }
                                    });
                                }
        
                                $(document).on('click', '.action', function(){
                                    var id = $(this).data('id');
                                    var status = $(this).data('status');
                                    var action = 'change_status';
                                    $('#message').html('');
                                    if(confirm("ยืนยันที่จะเปลี่ยนสถานะบัญชีอินฟลูเอนเซอร์คนนี้?"))
                                    {
                                        $.ajax({
                                                    url:'action4.php',
                                                    method:'POST',
                                                    data:{id:id, status:status, action:action},
                                                    success:function(data)
                                                    {
                                                        if(data != '')
                                                        {
                                                            load_user_data();
                                                            $('#message').html(data);
                                                        }
                                                    }
                                                });
                                    }
                                    else
                                    {
                                        return false;
                                }
                            });
        
                            });
                        </script>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>
