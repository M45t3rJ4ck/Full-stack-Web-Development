<?php

	session_start();
	
	if ($_SESSION['email']){
		echo "!Your logged in!";
	} else{
		header ("Location: index.php");
	};

?>