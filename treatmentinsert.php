<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>TURKEY🦃 TREATMENTS</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => Vet1
		// password => turkey
		// database name => turkey farm
		$conn = mysqli_connect("localhost", "Vet1", "turkey", "turkey farm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all  values from the form data(input)
		$EGGS_BATCH_NUMBER = $_REQUEST['EGGS_BATCH_NUMBER'];
		$ONSET_OF_SYMPTOMS = $_REQUEST['ONSET_OF_SYMPTOMS'];
		$TYPE_OF_INFECTION = $_REQUEST['TYPE_OF_INFECTION'];
		$TREATMENT_START = $_REQUEST['TREATMENT_START'];
		$TREATMENT_END = $_REQUEST['TREATMENT_END'];
		$MEDICINE_USED = $_REQUEST['MEDICINE_USED'];
		$CIRCLE_LOCATION_NUMBER = $_REQUEST['CIRCLE_LOCATION_NUMBER'];
		
		// Performing insert query execution
		// here our table name is treatments
		$sql = "INSERT INTO treatments VALUES ('$EGGS_BATCH_NUMBER',
			'$ONSET_OF_SYMPTOMS','$TYPE_OF_INFECTION','$TREATMENT_START','$MEDICINE_USED','$CIRCLE_LOCATION_NUMBER','$TREATMENT_END')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			
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
