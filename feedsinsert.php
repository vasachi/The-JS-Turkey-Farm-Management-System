<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>TURKEY🦃 FEEDS</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => FarmAcc
		// password => turkeymoney
		// database name => turkey farm
		$conn = mysqli_connect("localhost", "FarmAcc", "turkeymoney", "turkey farm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all  values from the form data(input)
		$CHICK_MASH = $_REQUEST['CHICK_MASH'];
		$GROWERS_MASH = $_REQUEST['GROWERS_MASH'];
		$LAYERS_MASH = $_REQUEST['LAYERS_MASH'];
		$SUPPLIER = $_REQUEST['SUPPLIER'];
		$PRODUCT_MANUFACTURER = $_REQUEST['PRODUCT_MANUFACTURER'];
		$PAYMENT_METHOD = $_REQUEST['PAYMENT_METHOD'];
		$TOTAL_VALUE_OF_FEEDS = $_REQUEST['TOTAL_VALUE_OF_FEEDS'];
		$ARRIVAL_DATE = $_REQUEST['ARRIVAL_DATE'];
		$NEXT_SHIPMENT_DATE= $_REQUEST['NEXT_SHIPMENT_DATE'];
		$SCM_NUMBER=$_REQUEST['SCM_NUMBER'];

		// Performing insert query execution
		// here our table name is turkeyfeeds
		$sql = "INSERT INTO turkeyfeeds VALUES ('$CHICK_MASH','$GROWERS_MASH','$LAYERS_MASH','$SUPPLIER ','$PRODUCT_MANUFACTURER',
			'$PAYMENT_METHOD','$TOTAL_VALUE_OF_FEEDS','$ARRIVAL_DATE','$NEXT_SHIPMENT_DATE','$SCM_NUMBER')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in database successfully."
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
	
</body>

</html>
