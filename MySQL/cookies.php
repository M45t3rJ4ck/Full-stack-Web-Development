<?php

	setcookie("customerId", "1234", time() + 60 * 60 * 24 * 365);
		
		echo $_COOKIE['customerId'];
		
		setcookie("customerId", "", time() - 60 * 60);
		
		setcookie("customerId", "", time() + 60 * 60);
		
			echo $_COOKIE['customerId'] = "test";

?>