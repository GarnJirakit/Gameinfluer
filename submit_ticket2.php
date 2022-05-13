<?php
include('config.php');

if(!isset($_SESSION['loggedinId']))
{
    header('location:login2.php');
}

if(isset($_REQUEST['submit']))
{
    $ticket=$_REQUEST['NumTicket'];
    $url = "http://localhost/gameinfluer/profile.php?item_id=1";
    $userId=$_SESSION['loggedinId'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket - 1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header("location: $url");
        exit();
}

if(isset($_REQUEST['submit2']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit3']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 5 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit4']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 20 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit5']))
{
    $ticket=$_REQUEST['NumTicket'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + 50 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

if(isset($_REQUEST['submit6']))
{
    $ticket=$_REQUEST['NumTicket'];
    $ticket1=$_REQUEST['ticket1'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + $ticket1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
        header('location:test6.php');
        exit;
}

$userId=$_SESSION['loggedinId'];
$getData=mysqli_query($db,"SELECT * FROM `ts_brand` WHERE `id`='$userId'");
$row=mysqli_fetch_assoc($getData);

?>