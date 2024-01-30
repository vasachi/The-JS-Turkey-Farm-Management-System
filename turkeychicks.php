<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
    <meta charset="utf-8" />
    <title>TURKEY🦃 CHICKS PRODUCTION</title>
<script>
function logout() {
    
    window.location.href = 'login3.php'; 
    
    // prevent the user from going back to the previous page
    window.history.pushState(null, null, window.location.href='login3.php');
    window.addEventListener('popstate', function logout() {
        window.history.pushState(null, null, window.location.href='login3.php');
    });
}
let timeout;
    function resetTimer() 
{
      clearTimeout(timeout);
      timeout = setTimeout(() =>
 {
        // logout user
 	window.location.href='login3.php';
      }, 60000);
    }

    document.addEventListener('mousemove', resetTimer);
    document.addEventListener('mousedown', resetTimer);
    document.addEventListener('keypress', resetTimer);
    document.addEventListener('touchmove', resetTimer);
    document.addEventListener('onscroll', resetTimer);
</script>
</head>
<style> 
body {
    
   background-color: BROWN; 
 
}
</style>

<body align="center">
    <h1>TURKEY🦃 CHICKS</h1>
      <form action="turkeychicksinsert.php"  method="post">
    <table cellspacing="5" align="center" cellpadding="15">
         <tr>
            <td><label>EGGS BATCH NUMBER</label></td>
            <td>
                <input type="text" name="EGGS_BATCH_NUMBER" maxlength="10" required/>
            </td>
        </tr>
		<tr>
            <td><label>TOTAL NUMBER OF EGGS</label></td>
            <td>
                <input type="text" name="TOTAL_NUMBER_OF_EGGS" maxlength="10" required/>
            </td>
        </tr>
          <tr>
            <td><label>COLLECTION DATE</label></td>
            <td>
                <input type="date" name="COLLECTION_DATE"  required/>
            </td>
        </tr>
         <tr>
            <td><label>DATE EGGS WERE SET IN INCUBATOR</label></td>
            <td>
                <input type="date" name="DATE_EGGS_SET_IN_INCUBATOR" required />
            </td>
        </tr>
         <tr>
            <td><label>INCUBATOR NUMBER</label></td>
            <td>
                <input type="text" name="INCUBATOR_NUMBER" maxlength="10" required />
            </td>
        </tr>
             <tr>
            <td><label>DATE OF EGGS NEXT TURNING</label></td>
            <td>
                <input type="date" name="DATE_OF_NEXT_TURNING"  required/>
            </td>
        </tr>
       
        
        
             <tr>
            <td><label>EXPECTED DATE OF HATCHING</label></td>
            <td>
                <input type="date" name="EXPECTED_DATE_HATCHING" required />
            </td>
        </tr>

             <tr>
            <td><label>TOTAL NUMBER OF EGGS HATCHED</label></td>
            <td>
                <input type="text" name="EGGS_HATCHED" maxlength="10" required />
            </td>
        </tr>

         <tr>
            <td>DATE CHICKS WERE REMOVED FROM INCUBATOR</td>
            <td>
                <input type="date" name="DATE_CHICKS_REMOVED_FROM_INCUBATOR" required />
            </td>
        </tr>
                <tr>
           <td><label>BROODING CIRCLE NUMBER</label></td>
            <td>
                <input type="text" name="BROODING_CIRCLE_NUMBER" maxlength="10" required />
            </td>
        </tr>
             <tr>


    </table>
    
   
        <input type="submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	</form>
    
</body>
</html>