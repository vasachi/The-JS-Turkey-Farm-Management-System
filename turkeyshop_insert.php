<!DOCTYPEJS🦃 html>
<html>

<head>
	<title>TURKEY SHOP</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => Admin1
		// password => shivachi
		// database name => turkey farm
		$conn = mysqli_connect("localhost", "Admin1", "shivachi", "turkey farm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$live_turkey = $_REQUEST['l_tproducts'];
		$turkey_breed = $_REQUEST['breed'];
		$number = $_REQUEST['number'];
		$other_products = $_REQUEST['O_tproducts'];
		$weight = $_REQUEST['weight'];
		$full_names = $_REQUEST['customer_name'];
		$phone = $_REQUEST['phone_no'];
		$city = $_REQUEST['city'];
		$delivery_address = $_REQUEST['address'];


		// Performing insert query execution
		// here our table name is turkey_shop
		$sql = "INSERT INTO turkey_shop VALUES ('$live_turkey',
			'$turkey_breed','$number','$other_products','$weight','$full_names','$phone','$city','$delivery_address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>order placed successfully."
				. " our delivery agent will contact you once delivery is ready."
				. " click the home button to exit</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
			<a href=jsturkeyfarm_website.html><button> HOME</button></a>

	</center>
</body>

</html>
