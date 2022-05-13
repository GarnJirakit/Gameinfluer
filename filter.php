<!-- ทดสอบในส่วนของ Filter ในหน้า Search1.php -->

<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>
<body>

<h3 class="text-center text-light bg-info p-2">Test</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h5>Filter</h5>
                <hr>
                <h6 class="text-info">Platform</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT platform FROM `ts_user`ORDER BY platform";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['platform']; ?>" id="platform"><?= $row['platform']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info">Gender</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT gender FROM `ts_user`ORDER BY gender";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['gender']; ?>" id="gender"><?= $row['gender']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info">Content</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT content FROM `ts_user`ORDER BY content";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['content']; ?>" id="content"><?= $row['content']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info">Game</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT game FROM `ts_user`ORDER BY game";
                        $result = $db->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['game']; ?>" id="game"><?= $row['game']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

            </div>

            <div class="col-lg-9">
                <h5 class="text-center" id="textChange">All Influ</h5>
                <hr>
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
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="images/<?= $row['image']; ?>" class="card-img-top" width="200px" height="200px">
                                    
                                        <h6 style="margin-top:5px;" class="text-light bg-info text-center rounded p-1"><?= $row['nameinflu']; ?></h6>
                                    
                                    <div class="card-body">
                                        <h4 class="card-title text-danger">ราคา : <?=number_format($row['cost']); ?>/-</h4>
                                        <p>
                                            Platform : <?= $row['platform']; ?><br>
                                            Gender : <?= $row['gender']; ?><br>
                                            Content : <?= $row['content']; ?><br>
                                            game : <?= $row['game']; ?><br>
                                        </p>
                                        <!-- <a href="#" class="btn btn-success btn-block">Add Add</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>

        </div>
    </div>

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
    
</body>
</html>