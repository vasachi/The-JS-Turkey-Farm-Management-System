<!DOCTYPEJS html>
<html>

<head>
	<title>TURKEY🦃 AI</title>
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
		$EGGS_BATCH_NUMBER_OF_TOM = $_REQUEST['EGGS_BATCH_NUMBER_OF_TOM'];
		$BREED_OF_TOM = $_REQUEST['BREED_OF_TOM'];
		$AGE_OF_TOM = $_REQUEST['AGE_OF_TOM'];
		$EGGS_BATCH_NUMBER_OF_HEN = $_REQUEST['EGGS_BATCH_NUMBER_OF_HEN'];
		$BREED_OF_HEN = $_REQUEST['BREED_OF_HEN'];
		$AGE_OF_HEN = $_REQUEST['AGE_OF_HEN'];
		$DATE_ADMINISTERED = $_REQUEST['DATE_ADMINISTERED'];

		// Performing insert query execution
		// here our table name is turkeyai
		$sql = "INSERT INTO turkeyai VALUES ('$EGGS_BATCH_NUMBER_OF_TOM',
			'$BREED_OF_TOM','$AGE_OF_TOM','$EGGS_BATCH_NUMBER_OF_HEN','$BREED_OF_HEN','$AGE_OF_HEN','$DATE_ADMINISTERED')";
		
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
