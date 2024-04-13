<?php
if(isset($_POST["loginbtn"]))
{
	$connect= mysqli_connect("localhost","root","","project2");
	$uid=$_POST["username"];
	$pwd=$_POST["password"];


    $qry="SELECT * FROM `login` WHERE username = '$uid' AND password = '$pwd'";

	$result = mysqli_query($connect,$qry);
	$rows = mysqli_num_rows($result);
	if($rows>0)
	{
		echo "Welcome";
	}
    else{
    	echo "Invalid username or password";
    }
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		login form
	</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto" >
				<div class="card">
					<div class="card-header bg-primary text-light" style="text-align: center;">
						Login Form
					</div>
					<div class="card-body">
						<form method="post">
							

							<div class="form-group">
								<label>User Name</label>
								<input type="text" name="username" class="form-control">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>

							
							<div class="form-group">
								<button type="submit" name="loginbtn" class=" btn btn-primary">Login</button></div>
								
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>



</body>
</html>