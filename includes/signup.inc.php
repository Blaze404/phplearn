<?php


include_once 'dbh.inc.php';



$first=mysqli_real_escape_string($conn,$_POST['first']);
$last=mysqli_real_escape_string($conn,$_POST['last']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);



$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

$sql="INSERT INTO users(user_firstname,user_lastname,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$hashedPwd')";
mysqli_query($conn,$sql);

header("Location:../signup.php?signup=success");
exit();
