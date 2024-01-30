<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>TURKEY🦃 CHICKS</title>
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
		$TOTAL_NUMBER_OF_EGGS = $_REQUEST['TOTAL_NUMBER_OF_EGGS'];
		$COLLECTION_DATE = $_REQUEST['COLLECTION_DATE'];
		$DATE_EGGS_SET_IN_INCUBATOR= $_REQUEST['DATE_EGGS_SET_IN_INCUBATOR'];
		$INCUBATOR_NUMBER = $_REQUEST['INCUBATOR_NUMBER'];
		$DATE_OF_NEXT_TURNING = $_REQUEST['DATE_OF_NEXT_TURNING'];
		$EXPECTED_DATE_HATCHING = $_REQUEST['EXPECTED_DATE_HATCHING'];
		$EGGS_HATCHED = $_REQUEST['EGGS_HATCHED'];
		$DATE_CHICKS_REMOVED_FROM_INCUBATOR = $_REQUEST['DATE_CHICKS_REMOVED_FROM_INCUBATOR'];
		$BROODING_CIRCLE_NUMBER = $_REQUEST['BROODING_CIRCLE_NUMBER'];

		// Performing insert query execution
		// here our table name is turkeychicks
		$sql ="INSERT INTO turkeychicks VALUES ('$EGGS_BATCH_NUMBER','$TOTAL_NUMBER_OF_EGGS','$COLLECTION_DATE','$DATE_EGGS_SET_IN_INCUBATOR',
							  '$INCUBATOR_NUMBER ','$DATE_OF_NEXT_TURNING','$EXPECTED_DATE_HATCHING','$EGGS_HATCHED ',
							   '$DATE_CHICKS_REMOVED_FROM_INCUBATOR','$BROODING_CIRCLE_NUMBER')";
		
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
