<!-- PHPJS code to establish connection with the localxamppserver -->
<?php

// Username is Admin1
$user = 'Admin1';
$password = 'shivachi';

// Database name is turkey farm
$database = 'turkey farm';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$key=$_REQUEST['key'];
// SQL query to select data from database
$sql = " SELECT * FROM turkeyfeeds where SCM_NUMBER='$key' ORDER BY ARRIVAL_DATE  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>comprehensive report on turkey🦃 supplies</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: black;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans',
			'Gill Sans', 'Gill Sans', 'Gill Sans';
		}

		td {
			background-color:pink;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		}
            @media print {
               #noprint {
                  display: none;
               }
		}
	</style>
<script>
let timeout;
    function resetTimer() 
{
      clearTimeout(timeout);
      timeout = setTimeout(() =>
 {
        // logout user
 	window.location.href='databaselogin.php';
      }, 60000);
    }

    document.addEventListener('mousemove', resetTimer);
    document.addEventListener('mousedown', resetTimer);
    document.addEventListener('keypress', resetTimer);
    document.addEventListener('touchmove', resetTimer);
    document.addEventListener('onscroll', resetTimer);
</script>
</head>

<body>
	<section>
		<hr color="blue" width=100%>
		<h1><u>JS TURKEY🦃 FARM</u></h1>
		<h1><u><b>SPECIALISED REPORTS ON FARM INVENTORIES.</u></b></h1>
		<hr color="blue" width=100%>
		<h1><u>TURKEY🦃 FEEDS INVENTORY REPORT</u></h1>
		
		<!-- TABLE CONSTRUCTION -->
	
	
	
		<table>
			<tr>
				<th>CHICK_MASH</th>
				<th>GROWERS_MASH</th>
				<th>LAYERS_MASH</th>
				<th>SUPPLIER</th>
				<th>PRODUCT_MANUFACTURER</th>
				<th>PAYMENT_METHOD</th>
				<th>TOTAL_VALUE_OF_FEEDS</th>
				<th>ARRIVAL_DATE</th>
				<th>NEXT_SHIPMENT</th>
				<th>SCM NUMBER</th>
	
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tbody id="turkeyfeeds">
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['CHICK_MASH'];?></td>
				<td><?php echo $rows['GROWERS_MASH'];?></td>
				<td><?php echo $rows['LAYERS_MASH'];?></td>
				<td><?php echo $rows['SUPPLIER'];?></td>
				<td><?php echo $rows['PRODUCT_MANUFACTURER'];?></td>
				<td><?php echo $rows['PAYMENT_METHOD'];?></td>
				<td><?php echo $rows['TOTAL_VALUE_OF_FEEDS'];?></td>
				<td><?php echo $rows['ARRIVAL_DATE'];?></td>
				<td><?php echo $rows['NEXT_SHIPMENT_DATE'];?></td>
				<td><?php echo $rows['SCM_NUMBER'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
<!-- PHPJS code to establish connection with the localserver -->
<?php

// Username is Admin1
$user = 'Admin1';
$password = 'shivachi';

// Database name is turkey farm
$database = 'turkey farm';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
// SQL query to select data from database
$sql = " SELECT * FROM vetsupplies where SCM_NUMBER='$key' ORDER BY PRODUCTS_TVALUE  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>DETAILS OF TURKEY🦃 VACCINATION</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color:black;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans',
			'Gill Sans', 'Gill Sans', 'Gill Sans';
		}

		td {
			background-color:pink;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
			<br>
		
		<h1><u>TURKEY🦃 VETERINARY INVENTORY REPORT.</u></h1>
		
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>ANTI_VIRALS</th>
				<th>ANTI_BACTERIALS</th>
				<th>SUPPLEMENTS</th>
				<th>EQUIPMENT_DEVICES</th>
				<th>PRODUCT_MANUFACTURER</th>
				<th>PAYMENT_METHOD</th>
				<th>PRODUCTS_TVALUE</th>
				<th>ARRIVAL_DATE</th>
				<th>NEXT_SHIPMENT_DATE</th>
				<th>SCM NUMBER</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['ANTI_VIRALS'];?></td>
				<td><?php echo $rows['ANTI_BACTERIALS'];?></td>
				<td><?php echo $rows['SUPPLEMENTS'];?></td>
				<td><?php echo $rows['EQUIPMENT_DEVICES'];?></td>
				<td><?php echo $rows['PRODUCT_MANUFACTURER'];?></td>
				<td><?php echo $rows['PAYMENT_METHOD'];?></td>
				<td><?php echo $rows['PRODUCTS_TVALUE'];?></td>
				<td><?php echo $rows['ARRIVAL_DATE'];?></td>
				<td><?php echo $rows['NEXT_SHIPMENT_DATE'];?></td>
				<td><?php echo $rows['SCM_NUMBER'];?></td>

				
			</tr>
			<?php
				}
			?>
		</table>
<br>
   <a href=databasesystemmenu.php><button id = "noprint" >DATABASE MAIN MENU</button></a>
   <a href=landingpage.php><button id = "noprint">SYSTEM MAIN MENU</button></a>
   <input type="button" id = "noprint" value="PRINT" onclick="window.print();return false;" />

		
	</section>
</body>

</html>
