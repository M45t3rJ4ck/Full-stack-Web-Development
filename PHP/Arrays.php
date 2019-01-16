<?php

	$myArray = array("Homer", "Marge", "Bart", "Lisa", "Maggie");
	$myArray[] = "Burns";
	print_r($myArray);
	echo $myArray[0];
	echo $myArray[1];
	echo $myArray[2];
	echo $myArray[3];
	echo $myArray[4];
	
	echo "<br><br>";
	
	$anotherArray[0] = "Pizza";
	$anotherArray[1] = "Ice Cream";
	$anotherArray[2] = "Craft Ale";
	$anotherArray[5] = "Coffee";
	$anotherArray["myFavouriteFood"] = "Braai";
	print_r($anotherArray);
	
	echo "<br><br>";
	
	$thirdArray = array("France" => "French", "Germany" => "German", "England" => "English", "Russia" => "Russian");
	print_r($thirdArray);
	echo sizeof($thirdArray);
	unset($thirdArray[England]);

?>