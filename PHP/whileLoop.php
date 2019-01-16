<?php

	$i = 0;
	while ($i < 10){
		echo $i."<br>";
		$i++;
	}
	
	$i = 5;
	while ($i < 50){
		echo $i."<br>";
		$i = $i + 5;
	}
	
	$i = 12;
	while ($i < 1200){
		$j = $i * 5;
		echo $j."<br>";
		$i++;
	}
	
	$family = Array("Homer"; "Marge"; "Bart"; "Lisa"; "Maggie");
		$i = 0;
		while ($i < sizeof($family)){
			echo $family[$i]."<br>";
			$i++;
		}

?>