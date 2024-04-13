<?php 
if(isset($_POST["resetbtn"]))
{
	$connect = mysqli_connect("localhost" , "root" , "" ,"project4");
	$user=$_POST["username"];
	$mob=$_POST["mobile"];
$qry = "SELECT * FROM `user` WHERE username = '$user' AND  mobile = '$mob'";
$result= mysqli_query($connect , $qry);
$row = mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);
$id = $data["id"];
if ($row>0) 
{
	$pwd=randomPassword();
	$qry = "UPDATE `user` SET `password`='$pwd' WHERE id = '$id'";
	$result=mysqli_query($connect , $qry);?>
	<script>
	alert ("Password Reset Successfully"); </script> <?php
	
}
else
{
	?> <script>
	alert "Invalid Username and password" </script> <?php

}

}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset Pssword</title>
</head>
<body>
<form method="post"> <center>
	<table cellspacing="30">
		<tr>
			<td>Username</td>
			<td> <input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="tel" name="mobile"></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><button name="resetbtn">
			Reset Password </button>
		</td>
	    </tr>
	    <tr>
	    	<td colspan="2">Password -<font color="blue"><?php echo $pwd ?></font></td>
	    </tr>
	</table>
</center>
</body>
</html>