<?php
	
	if (array_key_exists('email', $_POST) or array_key_exists('password', $_POST)){
		if ($_POST['email'] == ""){
			echo = "<p>Your email address is requiered.</p>"
		} else if ($_POST['password'] == ""){
			echo = "<p>Your password is requiered.</p>"
		} else{
			$query = "SELECT 'username' FROM 'users' WHERE 'email' = ".mysqli_real_escape_string($link, $_POST['email']."'");
			$result = mysqli_query($link, $query);
			if (mysql_num_rows($result) > 0){
				echo = "<p>That emailaddress is already taken.</p>"
			} else {
				$query = "INSERT INTO 'users'('email', 'password') VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $password['password'])"')";
				
				if (mysqli_query($link, $query)){
					echo = "<p>You've been signed up.</p>";
				} else{
					echo = "<p>There was a problem - please try again later.</p>"
				};
			};
		};
	};

	$link = mysqli_connect("192.168.8.1", "C:/Code/SQL/mySQL/users.mweb","VogesAWillem");
	
		if (mysqli_connect_error()){
			die ("There was an connection error.");
		};
		
		mysqli_query($link, $query);

		$query = "SELECT * FROM 'users'";
		
		if ($result = mysqli_query($link, $query)){
			while ($row = mysqli_fetch_array($result));
				print_r($row);
		};

		$query = "SELECT * FROM 'users' WHERE 'email' LIKE '@springfield.us'";
		
		if ($result = mysqli_query($link, $query)){
			while ($row = mysqli_fetch_array($result));
				print_r($row);
		};
		
		$query = "SELECT * FROM 'users' WHERE 'email' LIKE '%l%";
		
		if ($result = mysqli_query($link, $query)){
			while ($row = mysqli_fetch_array($result));
				print_r($row);
		};

?>


<!doctype html>

<html lang="en">
	
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Hello, world!</title>
  
	</head>
  
	<body>
		
		<h1>Hello, world!</h1>
		
		<form>
		
			<input name="email" type="text" placeholder="Email Address"></input>
			<input name="password" type="password" placeholder="Password"></input>
			<input type="submit" value="login"></input>
		
		</form>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
	</body>
	
</html>