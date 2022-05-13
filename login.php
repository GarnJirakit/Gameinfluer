<?php
    include('database_connection.php');

    if(isset($_SESSION["type"]))
    {
        header("location:index.php");
    }

    $message = '';
    if(isset($_POST["login"]))
    {
        if(empty($_POST["email"]))
        {
            $message = "<div class='alert alert-danger'>Both Fields are required</div>";
        }
        else
        {
            $query = "SELECT * FROM ts_user WHERE email = :email";
            $statement = $connect->prepare($query);
            $statement->execute(
            array('email' => $_POST["email"]));
            $count = $statement->rowCount();
            if($count > 0)
            {
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                    if($row["status"] == 'Active')
                    {
                        $_SESSION["type"] = $row["user_type"];
                        header("location: index.php");
                    }
                        else
                    {
                        $message = '<div class="alert alert-danger"><i class="fas fa-times-circle"></i> ไม่สามารถเข้าสู่ระบบได้ เนื่องจากบัญชีถูกระงับ</div>';
                    }
                }
            }
            else
        {
        $message = "<div class='alert alert-danger'>ใส่อีเมลผิด</div>";
    }
    }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ทดสอบ</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>

    <body>
    <br />
        <div class="container">
            <h2 align="center">ทดสอบ</h2>
            <br />
                <div class="panel panel-default">
                    <div class="panel-heading">เข้าสู่ระบบ</div>
                    <div class="panel-body">
                        <form method="post">
                            <span class="text-danger"><?php echo $message; ?></span>
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>รหัสผ่าน</label>
                                <input type="password" name="password" id="password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
                <br />

  </div>
 </body>
</html>
