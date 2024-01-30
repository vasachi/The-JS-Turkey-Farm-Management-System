<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>TURKEY🦃 EGGS PRODUCTION</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => FarmHand
		// password => turkeyfriend
		// database name => turkey farm
		$conn = mysqli_connect("localhost", "FarmHand", "turkeyfriend", "turkey farm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all  values from the form data(input)
		$EGGS_BATCH_NUMBER = $_REQUEST['EGGS_BATCH_NUMBER'];
		$BIRD_BREED = $_REQUEST['BIRD_BREED'];
		$COLLECTION_DATE = $_REQUEST['COLLECTION_DATE'];
		$TO_BE_SOLD = $_REQUEST['TO_BE_SOLD'];
		$FOR_INCUBATION = $_REQUEST['FOR_INCUBATION'];
		$INCUBATOR_NUMBER = $_REQUEST['INCUBATOR_NUMBER'];

		// Performing insert query execution
		// here our table name is turkeyeggs
		$sql = "INSERT INTO turkeyeggs VALUES ('$EGGS_BATCH_NUMBER',
			'$BIRD_BREED','$COLLECTION_DATE','$TO_BE_SOLD','$FOR_INCUBATION','$INCUBATOR_NUMBER')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in database successfully.</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<a href=landingpage.php><button> MAIN MENU</button></a>

	</center>
</body>

</html>
