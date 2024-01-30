<!-- PHPJS code to establish connection with the localserver -->
<?PHP
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

//$tablename=$_REQUEST['tablename'];
$key=$_REQUEST['key'];
//$column=$_REQUEST['column'];
//$EGSS_BATCH_NUMBER=$_REQUEST['key'];
// SQL query to select data from database
$sql = " SELECT * FROM turkeyeggs where EGGS_BATCH_NUMBER='$key' ORDER BY EGGS_BATCH_NUMBER  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>DETAILS OF MATURE TURKEYS🦃 </title>
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
		<hr color="blue" width=100%>
		<h1><b><u>JS TURKEY🦃 FARM</b></u></h1>
		<h1><b><u>SPECIALISED REPORTS ON TURKEY PRODUCTION.</b></u></h1>
		<hr color="blue" width=100%>
		
		<h1><u>TURKEY🦃 EGGS REPORT.</u></h1>
<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>EGGS_BATCH_NUMBER</th>
				<th>BIRD_BREED</th>
				<th>COLLECTION_DATE</th>
				<th>TO_BE_SOLD</th>
				<th>FOR_INCUBATION</th>
				<th>INCUBATOR_NUMBER</th>
				
	
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
				<td><?php echo $rows['EGGS_BATCH_NUMBER'];?></td>
				<td><?php echo $rows['BIRD_BREED'];?></td>
				<td><?php echo $rows['COLLECTION_DATE'];?></td>
				<td><?php echo $rows['TO_BE_SOLD'];?></td>
				<td><?php echo $rows['FOR_INCUBATION'];?></td>
				<td><?php echo $rows['INCUBATOR_NUMBER'];?></td>
				

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
$sql = " SELECT * FROM turkeychicks where EGGS_BATCH_NUMBER='$key' ORDER BY EGGS_BATCH_NUMBER  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<section>
		<h1><u>TURKEY🦃 CHICKS REPORT.</u></h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>BATCH_NUMBER</th>
				<th>TOTAL_EGGS</th>
				<th>COLLECTION_DATE</th>
				<th>DATE_SET_IN_INCUBATOR</th>
				<th>INCUBATOR_NUMBER</th>
				<th>EXPECTED_DATE_HATCHING</th>
				<th>CHICKS_HATCHED</th>
				<th>DATE_REMOVED</th>
				<th>BRD_LCTN</th>
			
	
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
				<td><?php echo $rows['EGGS_BATCH_NUMBER'];?></td>
				<td><?php echo $rows['TOTAL_NUMBER_OF_EGGS'];?></td>
				<td><?php echo $rows['COLLECTION_DATE'];?></td>
				<td><?php echo $rows['DATE_EGGS_SET_IN_INCUBATOR'];?></td>
				<td><?php echo $rows['INCUBATOR_NUMBER'];?></td>
				<td><?php echo $rows['EXPECTED_DATE_HATCHING'];?></td>
				<td><?php echo $rows['EGGS_HATCHED'];?></td>
				<td><?php echo $rows['DATE_CHICKS_REMOVED_FROM_INCUBATOR'];?></td>
				<td><?php echo $rows['BROODING_CIRCLE_NUMBER'];?></td>



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
$sql = " SELECT * FROM vaccination where EGGS_BATCH_NUMBER='$key' ORDER BY EGGS_BATCH_NUMBER  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<section>
		<h1><u>TURKEY🦃 VACCINATION REPORT.</u></h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>EGGS_BATCH_NUMBER</th>
				<th>DATE_OF_HATCHING</th>
				<th>AGE_OF_TURKEYS</th>
				<th>VACCINE_NAME</th>
				<th>ROUTE_OF_ADMINISTRATION</th>
				<th>DATE_OF_ADMINISTRATION</th>
				<th>TYPE_OF_DISEASE</th>
				
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
				<td><?php echo $rows['EGGS_BATCH_NUMBER'];?></td>
				<td><?php echo $rows['DATE_OF_HATCHING'];?></td>
				<td><?php echo $rows['AGE_OF_TURKEYS'];?></td>
				<td><?php echo $rows['VACCINE_NAME'];?></td>
				<td><?php echo $rows['ROUTE_OF_ADMINISTRATION'];?></td>
				<td><?php echo $rows['DATE_OF_ADMINISTRATION'];?></td>
				<td><?php echo $rows['TYPE_OF_DISEASE'];?></td>
				
				
			</tr>
			<?php
				}
			?>
		</table>

	<!-- PHPJS code to establish connection with the localserver -->
<?PHP
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

//$tablename=$_REQUEST['tablename'];
$key=$_REQUEST['key'];
//$column=$_REQUEST['column'];
//$EGSS_BATCH_NUMBER=$_REQUEST['key'];
// SQL query to select data from database
$sql = " SELECT * FROM treatments where EGGS_BATCH_NUMBER='$key' ORDER BY EGGS_BATCH_NUMBER  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
	<section>
		<h1><u>TURKEY🦃 TREATMENTS REPORT.</u></h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>EGGS_BATCH_NUMBER</th>
				<th>ONSET_OF_SYMPTOMS</th>
				<th>TYPE_OF_INFECTION</th>
				<th>TREATMENT_START</th>
				<th>MEDICINE_USED</th>
				<th>CIRCLE_LOCATION_NUMBER</th>
				<th>TREATMENT_END</th>
	
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
				<td><?php echo $rows['EGGS_BATCH_NUMBER'];?></td>
				<td><?php echo $rows['ONSET_OF_SYMPTOMS'];?></td>
				<td><?php echo $rows['TYPE_OF_INFECTION'];?></td>
				<td><?php echo $rows['TREATMENT_START'];?></td>
				<td><?php echo $rows['MEDICINE_USED'];?></td>
				<td><?php echo $rows['CIRCLE_LOCATION_NUMBER'];?></td>
				<td><?php echo $rows['TREATMENT_END'];?></td>


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
$sql = " SELECT * FROM matureturkeys where EGGS_BATCH_NUMBER='$key' ORDER BY EGGS_BATCH_NUMBER  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<section>
		<h1><u>MATURE TURKEYS🦃 REPORT.</u></h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>EGGS_BATCH_NUMBER</th>
				<th>TOTAL_NUMBER_OF_TOMS</th>
				<th>TOTAL_NUMBER_OF_HENS</th>
				<th>SETTING_TYPE</th>
				<th>GENERAL_SETTING_LOCATION_NUMBER</th>			
	
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
				<td><?php echo $rows['EGGS_BATCH_NUMBER'];?></td>
				<td><?php echo $rows['TOTAL_NUMBER_OF_TOMS'];?></td>
				<td><?php echo $rows['TOTAL_NUMBER_OF_HENS'];?></td>
				<td><?php echo $rows['SETTING_TYPE'];?></td>
				<td><?php echo $rows['GENERAL_SETTING_LOCATION_NUMBER'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
<br>

		<a href=databasesystemmenu.php><button>DATABASE MAIN MENU</button></a>
		<a href=landingpage.php><button>SYSTEM MAIN MENU</button></a>
		<input type="button" id = "noprint" value="PRINT" onclick="window.print();return false;" />
		<input type="button" name="log"  value="LOGOUT" onclick="logout()">	
</section>
</body>

</html>
