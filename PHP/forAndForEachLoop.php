<?php

	for ($i = 0; $i < 10; $i++){
		echo $i."<br>";
	}
	
	for ($i = 2; $i < 30; $i = $i +2){
		echo $i."<br>";
	}
	
	for ($i = 10; $i >= 0; $i--){
		echo $i."<br>";
	}
	
	$family = array("Homer", "Marge", "Bart", "Lisa", "Maggie");
	for ($i = 0; $i < sizeof($family); $i++){
		echo $family[$i]."<br>";
	}
	
	foreach ($family as $key => $value){
		$family[$key] = $value."Simpson";
		echo "Array item".$key."is".$value."<br>";
	}

?>