<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>TURKEY🦃 VACCINATION SCHEDULE</title>
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
		
		// Taking all values from the form data(input)
		$EGGS_BATCH_NUMBER = $_REQUEST['EGGS_BATCH_NUMBER'];
		$DATE_OF_HATCHING = $_REQUEST['DATE_OF_HATCHING'];
		$AGE_OF_TURKEYS = $_REQUEST['AGE_OF_TURKEYS'];
		$VACCINE_NAME = $_REQUEST['VACCINE_NAME'];
		$ROUTE_OF_ADMINISTRATION = $_REQUEST['ROUTE_OF_ADMINISTRATION'];
		$DATE_OF_ADMINISTRATION = $_REQUEST['DATE_OF_ADMINISTRATION'];
		$TYPE_OF_DISEASE=$_REQUEST['TYPE_OF_DISEASE'];
 
		// Performing insert query execution
		// here our table name is vaccination
		$sql = "INSERT INTO vaccination VALUES ('$EGGS_BATCH_NUMBER',
			'$DATE_OF_HATCHING','$AGE_OF_TURKEYS','$VACCINE_NAME ','$ROUTE_OF_ADMINISTRATION','$DATE_OF_ADMINISTRATION','$TYPE_OF_DISEASE')";
		
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
