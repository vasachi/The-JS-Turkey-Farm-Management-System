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
$sql = " SELECT * FROM turkeyeggs ORDER BY EGGS_BATCH_NUMBER  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>DETAILS OF TURKEY🦃 EGGS</title>
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
		<h1><u>JS TURKEY🦃 FARM</u></h1>
		<h1><u>TURKEY 🦃 EGGS REPORT</u></h1>
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
		<a href=databasesystemmenu.php><button>DATABASE MAIN MENU</button></a>
		<a href=landingpage.php><button>SYSTEM MAIN MENU</button></a>
		<input type="button" id = "noprint" value="PRINT" onclick="window.print();return false;" />
		<input type="button" name="log"  value="LOGOUT" onclick="logout()">	
</section>
</body>

</html>
