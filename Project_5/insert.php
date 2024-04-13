<?php
if(isset($_POST["registerbtn"])) 
{
  $connect = mysqli_connect("localhost","root","","project5");
  $fullname = $_POST["fullname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $mobile   = $_POST["mobile"];

  $qry = "INSERT INTO `user`(`id`, `fullname`, `username`, `password`, `mobile`) VALUES (NULL,'$fullname','$username','$password','$mobile')";
  $result = mysqli_query($connect , $qry);
  if($result){
  	echo "Data Entered Succcessfully";
  }
  else
  {
  	echo "Something went wrong";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<center><h2>Register user</h2></center>
<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-secondary text-light">
						Register
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Fullname</label>
								<input type="text" name="fullname" class="form-control">
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control">
							</div>

							<div class="form-group">
								<label> Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Mobile no.</label>
								<input type="tel" name="mobile" class="form-control">
							</div>
							<div class="form-group">
								<button name="registerbtn" class="btn btn-secondary">Register</button>
							</div>
								<p> already registered.<a href="changepwd.php">login to change password</a></p>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>