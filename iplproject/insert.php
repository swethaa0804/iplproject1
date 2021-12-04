<?php

include "db.php";

$fn = $_POST['FirstName'];
$ln = $_POST['LastName'];
$email = $_POST['Email'];
$pwd = $_POST["Password"];
$cpwd = $_POST["ConfirmPassword"];

$sql = "insert into signup(FirstName,LastName,Email,Password,ConfirmPassword) values ('$fn','$ln','$email','$pwd','$cpwd')";
$result = mysqli_query($con,$sql);

if($result){
    header("location: login.php");
}
else{
    header("location: error.php");
}
?>