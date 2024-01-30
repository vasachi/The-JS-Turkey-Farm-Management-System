<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>MATURE TURKEYS🦃(ready for market)</title>
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
		
		// Taking all values from the form data(input)
		$EGGS_BATCH_NUMBER = $_REQUEST['EGGS_BATCH_NUMBER'];
		$TOTAL_NUMBER_OF_TOMS = $_REQUEST['TOTAL_NUMBER_OF_TOMS'];
		$TOTAL_NUMBER_OF_HENS = $_REQUEST['TOTAL_NUMBER_OF_HENS'];
		$SETTING_TYPE = $_REQUEST['SETTING_TYPE'];
		$GENERAL_SETTING_LOCATION_NUMBER = $_REQUEST['GENERAL_SETTING_LOCATION_NUMBER'];
		
		// Performing insert query execution
		// here our table name is matureturkeys2
		$sql = "INSERT INTO matureturkeys VALUES ('$EGGS_BATCH_NUMBER',
			'$TOTAL_NUMBER_OF_TOMS','$TOTAL_NUMBER_OF_HENS','$SETTING_TYPE','$GENERAL_SETTING_LOCATION_NUMBER')";
		
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
