<?php

	$link = mysqli_connect("192.168.8.1", "C:/Code/SQL/mySQL/users.mweb","VogesAWillem");
	
		if (mysqli_connect_error()){
			die ("There was an connection error.");
		}
		
		$query = "INSERT INTO 'users'('email', 'password')VALUES('burns@springfield.us', '17935')";
		
		$query = "UPDATE 'users' SET 'email' = hthemans@springfield.us WHERE username = Homer LIMIT 1";
		
		$query = "UPDATE 'users' SET 'password' = ilovemarge WHERE 'email' = hthemans@springfield.us LIMIT 1";
		
		mysqli_query($link, $query);
		
		$query = "SELECT * FROM 'users'";
		
		if ($result = mysqli_query($link, $query)){
			$row = mysqli_fetch_array($result);
			print_r($row);
			echo "Your email is ".$row[1]." and your password is ".$row[2].".";
		}

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

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
	</body>
	
</html>