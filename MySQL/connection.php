<?php
	
	$link = ("localhost", "databasename", "databasepassword", "databasename");
	
	if (mysqli_connect_error()){
			die ("!Database connection error!");
		};
		
?>