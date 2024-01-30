<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>🦃VET SUPPLIERS</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => FarmAcc
		// password => turkeyfriend
		// database name => turkey farm
		$conn = mysqli_connect("localhost", "FarmAcc", "turkeyfriend", "turkey farm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all  values from the form data(input)
		$ANTI_VIRALS = $_REQUEST['ANTI_VIRALS'];
		$ANTI_BACTERIALS = $_REQUEST['ANTI_BACTERIALS'];
		$SUPPLEMENTS = $_REQUEST['SUPPLEMENTS'];
		$EQUIPMENT_DEVICES = $_REQUEST['EQUIPMENT_DEVICES'];
		$PRODUCT_MANUFACTURER = $_REQUEST['PRODUCT_MANUFACTURER'];
		$PAYMENT_METHOD = $_REQUEST['PAYMENT_METHOD'];
		$PRODUCTS_TVALUE = $_REQUEST['PRODUCTS_TVALUE'];
		$ARRIVAL_DATE = $_REQUEST['ARRIVAL_DATE'];
		$NEXT_SHIPMENT_DATE = $_REQUEST['NEXT_SHIPMENT_DATE'];
		$SCM_NUMBER=$_REQUEST['SCM_NUMBER'];
		// Performing insert query execution
		// here our table name is vetsupplies
		$sql = "INSERT INTO vetsupplies VALUES ('$ANTI_VIRALS','$ANTI_BACTERIALS','$SUPPLEMENTS','$EQUIPMENT_DEVICES','$PRODUCT_MANUFACTURER',
			'$PAYMENT_METHOD','$PRODUCTS_TVALUE','$ARRIVAL_DATE','$NEXT_SHIPMENT_DATE','$SCM_NUMBER')";
		
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
