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
    <title>Document</title>
    <link rel="stylesheet" href="css/increment.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <div class="container">
        <h1>TEST</h1>

        
            <h2 id="root"></h2>จำนวนตั๋ว
        

        <div class="b2">
            <button style="font-size: 25px;" onclick="decrement()">ใช้ตั๋วเพื่อดูโปรไฟล์ <i class="fas fa-ticket-alt"></i>&nbsp;-1</button>
        </div>

        <div class="">
            <button style="font-size: 25px;" onclick="increment()">ซื้อตั๋วชุด 1 จำนวน 1 ตั๋ว</button>
            <button style="font-size: 25px;" onclick="increment2()">ซื้อตั๋วชุด 2 จำนวน 5 ตั๋ว</button>
            <button style="font-size: 25px;" onclick="increment3()">ซื้อตั๋วชุด 3 จำนวน 20 ตั๋ว</button>
            <button style="font-size: 25px;" onclick="increment4()">ซื้อตั๋วชุด 4 จำนวน 50 ตั๋ว</button>
        </div>
      
    </div>



    <script>
        var data=<?php echo $row['ticket']; ?>;
        document.getElementById("root").innerText=data;
        function decrement(){
            data=data-1;
            document.getElementById("root").innerText=data;
        }
        function increment(){
            data=data+1;
            document.getElementById("root").innerText=data;
        }
        function increment2(){
            data=data+5;
            document.getElementById("root").innerText=data;
        }
        function increment3(){
            data=data+20;
            document.getElementById("root").innerText=data;
        }
        function increment4(){
            data=data+50;
            document.getElementById("root").innerText=data;
        }
    </script>
    
</body>
</html>