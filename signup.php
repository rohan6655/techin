<?php


include("connection.php");


$userid = $_POST['userid'];
$useremail = $_POST['useremail'];
$password = $_POST['password'];
$usercnfpass = $_POST['usercnfpass'];



$query = "INSERT INTO signup ( userid, useremail, password, usercnfpass) VALUES ('$userid','$useremail','$password','$usercnfpass')";

if($password==$usercnfpass)
{
mysqli_query($con, $query);
}
else{
    echo "Incorrect Password";
}

if(isset($_POST['submitted']))
{
    header("Location: interact.html");
}

?>





