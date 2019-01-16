<?php

	$user[name] = "Homer";
	$user[password] = "1234";
	$user[gender] = "male";
	print_r($_GET);
	echo $_GET[gender];
	echo "Hello there".$_GET['name']."!";

	if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
		$i = 2;
		$isPrime = "true";
		while ($i <$_GET['number']){
			if ($_GET['number'] % $i == 0){
				$isPrime == "false";
			}
			
			$i++;
		}
		
		if ($isPrime){
			echo "<p>".$i."is a prime number!</p>";
		} else{
			echo "<p>".$i."is not prime!</p>";
		}
	} else if($_GET){
		echo "<p>Enter a positive whole number only!</p>";
	}
?>

<p>What is your name?</p>

<form>
	
	<input name="name" type="text">
	<input type="submit" value="Go">

</form>

<p>Please enter a whole number</p>

<form>

	<input name="number" type="text">
	<input type="submit" value="Go">
	
</form>