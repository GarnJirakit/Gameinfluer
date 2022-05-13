<?php
    require 'config.php';

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
            while($row=$result->fetch_assoc()){
                $output .=
                '<div class="col-md-3 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                        <img src="images/'.$row['image'].'" class="card-img-top" width="200px" height="200px">
                        <div class="card-img-overlay">
                            <h6 style="margin-top:5px;" class="text-light bg-info text-center rounded p-1">'.$row['nameinflu'].'</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-danger">ราคา : '.number_format($row['cost']).'/-</h4>
                            <p>
                                Platform : '.$row['platform'].'<br>
                                Gender : '.$row['gender'].'<br>
                                Content : '.$row['content'].'<br>
                                game : '.$row['game'].'<br>
                            </p>
                            <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>'
            ;
            }
        }
        else{
            $output = "<h3>No Product Found!</h3>";
        }
        echo $output;
    }
?>


<!-- '<div class="col-md-3 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                        <img src="images/'.$row['image'].'" class="card-img-top" width="200px" height="200px">
                        <div class="card-img-overlay">
                            <h6 style="margin-top:5px;" class="text-light bg-info text-center rounded p-1">'.$row['nameinflu'].'</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-danger">ราคา : '.number_format($row['cost']).'/-</h4>
                            <p>
                                Platform : '.$row['platform'].'<br>
                                Gender : '.$row['gender'].'<br>
                                Content : '.$row['content'].'<br>
                                game : '.$row['game'].'<br>
                            </p>
                            <a href="#" class="btn btn-primary bt2">ดูโปรไฟล์</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>' -->