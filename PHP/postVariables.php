<?php

	print_r($_POST);
	
	if ($_POST){
		$family = array("Homer", "Marge", "Bart", "Lisa", "Maggie");
		$isKnown = "false";
		foreach ($family as $value){
			if ($value == $_POST['name']){
				$isKnown = "true";
			}
		}
		
		if ($isKnown){
			echo "Hi there".$_POST['name']."!";
		} else{
			echo "I don't know you!";
		}
	}

?>

<p>Please enter a whole number.</p>;

<form method="post">

	<input name="number" type="text">;
	<input type="submit" value="Submit">;

</form>