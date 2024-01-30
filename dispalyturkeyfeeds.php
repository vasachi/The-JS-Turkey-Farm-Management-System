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

// SQL query to select data from database

$sql = " SELECT * FROM turkeyfeeds ORDER BY ARRIVAL_DATE  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title>DETAILS OF TURKEY🦃 FEEDS</title>
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
		{
             @media print {
      #printButton {
        display: none;
               }
		}
	</style>
<script>
function logout() {
    
    window.location.href = 'databaselogin.php'; 
    
    // prevent the user from going back to the previous page
    window.history.pushState(null, null, window.location.href='databaselogin.php');
    window.addEventListener('popstate', function logout() {
        window.history.pushState(null, null, window.location.href='databaselogin.php');
    });
}
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
		<h1><u>JS TURKEY🦃 FARM</u></h1>
		<h1><u>TURKEY🦃 FEEDS INVENTORY REPORT.</u></h1>
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

   <a href=databasesystemmenu.php><button id="printButton" >DATABASE MAIN MENU</button></a>
   <a href=landingpage.php><button id="printButton">SYSTEM MAIN MENU</button></a>
   <button id="printButton"  onclick="window.print();return false;">PRINT</button>
   <input type="button" id="printButton" name="log"  value="LOGOUT" onclick="logout()">
		
	</section>
</body>

</html>
