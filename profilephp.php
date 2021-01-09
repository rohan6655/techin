<?php
session_start();
//error_reporting(0);
include('connection.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: interact.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: interact.php");
}

if(isset($_POST['submit']))
{

$userlname=$_POST['userlname'];
$userdob=$_POST['userdob'];
$userinsta=$_POST['userinsta'];
$useryear=$_POST['useryear'];
$userbranch=$_POST['userbranch'];
$usergithub=$_POST['usergithub'];
$usergender=$_POST['usergender'];
$usermobile=$_POST['usermobile'];
$userlinkd=$_POST['userlinkd'];
$userinfo=$_POST['userinfo'];


$sql=mysqli_query($con,"Update user set userlname='$userlname',userdob='$userdob',userinsta='$userinsta',useryear='$useryear',userbranch='$userbranch',usergithub='$usergithub',usermobile='$usermobile',userlinkd='$userlinkd',usergender='$usergender',userinfo='$userinfo' where username='".$_SESSION['username']."'");
if($sql)
{

    echo"<script>alert('Your Profile updated Successfully');</script>";

}
}
?>