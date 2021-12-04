<?php
session_start();

include "db.php";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$email = $_POST["email"];
$pwd = $_POST["password"];

$sql = "select * from signup where Email='$email' and Password='$pwd'";
$result = mysqli_query($con,$sql);
$array = mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count>0){
    header("location: userhome.php");
    $_SESSION["email"] = $array['FirstName'];
    $_SESSION["userID"] = $array['ID'];
}else{
    header("location: login.php");
    $_SESSION["error"] = 'Incorrect email ID or password.';
}
?>