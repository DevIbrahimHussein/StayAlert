<?php

require 'ForgotPassConn.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$SetPass=0;


$query="SELECT username,email FROM login";
$result=mysqli_query($db,$query) or die("Error getting!");

$numRows=mysqli_num_rows($result);

for($i=1; $i<=$numRows;$i++){
  $row=mysqli_fetch_assoc($result);

  $PresName=$row['username'];
  $PresEmail=$row['email'];

  if($name == $PresName){
    if($email == $PresEmail){
      $SetPass = 1;
    }
  }
}


if($SetPass==1){
  $query2="UPDATE login
           SET password='$pass' WHERE username='$name' AND email='$email' ";
  mysqli_query($db,$query2) or die("Error getting!!");
  echo "RESET The Password! Return to the page of Sign in........";
	echo "<meta http-equiv='Refresh' content='2;url=userStayAlert.php'>";
}
else {
  echo "You should enter Your correct name and email";
}


 ?>
