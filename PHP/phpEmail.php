<?php

	$emailTo = "homer@simpson.com";
	$subject = "I hope your working!";
	$body = "Burns is on his way to you!";
	$headers = "From: stu@teenbober.com";
	if (mail($emailTo, $subject, $body, $headers)){
		echo "The email was send successfully!";
	} else{
		echo "Your email was not send at all!";
	}

?>