<?php

	$salt = "someloadofrandomvalues";

		echo md5($salt, "password");
		
	$row['id'] = 69;
		
		echo md5(md5($row['id']), "password");

?>