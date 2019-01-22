<?php

	echo file_get_contents("https://maps.googleapis.com/maps/api/js?key=AIzaSyCBdvWcJOzDYjbL1aebDhiNZt55vtVur0U&callback=initMap");

?>


<html>
	
	<head>
	
		<title>Geocoding An Address</title>
	
	</head>
	
	<body>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript">
		
			$ajax({
				$url: "https://maps.googleapis.com/maps/api/js?key=AIzaSyCBdvWcJOzDYjbL1aebDhiNZt55vtVur0U&callback=initMap",
				type = "GET",
				success = function(data){
					$each(data["results"][0]["address_components"], function(key, value){
						if (value["types"][0] == "country"){
							alert(value["short_name"]);
						};
					});
				};
			});
		
		</script>
	
	</body>

</html>