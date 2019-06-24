<?php

require 'signinConn.php';

$username=$_POST['username'];
$pass=$_POST['psw'];
$user_exists = 0;

$query="SELECT username,password FROM login";
$result=mysqli_query($db,$query) or die("Error getting!");

$num_rows=mysqli_num_rows($result);

for($row_num = 1; $row_num <= $num_rows; $row_num++){
		$row = mysqli_fetch_assoc($result);
		$PresUsername = $row["username"];
		$PresPass = $row["password"];

		if($username == $PresUsername){
			if($pass == $PresPass){
				$user_exists = 1;
			}
		}
	}

	if($user_exists ==  1){
    header('Location:HomePage.php');
	}else{
		echo "User doesn't exist.";
	}


 ?>
