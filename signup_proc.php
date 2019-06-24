<?php

require 'signupConn.php';

$username=$_POST['username'];
$pass=$_POST['psw'];
$Cpass=$_POST['ReTypePsw'];
$email=$_POST['email'];

if($pass==$Cpass){
  $query="INSERT INTO login
           VALUES('$username','$email','$pass')";
  $result=mysqli_query($db,$query) or die("Error getting!!");
}
if($result){
  echo "Inserted! Redirecting to homepage...";

     header('Location:Sign in.php');
}
else{
  echo "You should enter the same password to insert";
}

 ?>
