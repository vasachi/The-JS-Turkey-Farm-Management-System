<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
    <meta charset="utf-8" />
    <title>MATURE TURKEY🦃 PRODUCTION</title>
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
    <h1>MATURE TURKEYS🦃(Ready For Market)</h1>
    <form action="mturkeysinsert.php" method="post">
    <table cellspacing="5" align="center" cellpadding="15">
         <tr>
            <td><label>EGGS BATCH NUMBER</label></td>
            <td>
                <input type="text" name="EGGS_BATCH_NUMBER" class="EGGS BATCH NUMBER" maxlength="10" required/>
            </td>
        </tr>
		<tr>
            <td><label>TOTAL NUMBER OF TOMS</label></td>
            <td>
                <input type="text" name="TOTAL_NUMBER_OF_TOMS" class="TOTAL NUMBER OF MALE TURKEYS(TOMS)" maxlength="10" required />
            </td>
        </tr>

              <tr>
            <td>TOTAL NUMBER OF HENS </td>
            <td>
                <input type="text" name="TOTAL_NUMBER_OF_HENS" class="TOTAL NUMBER OF FEMALE TURKEYS(HENS)" maxlength="10" required />
            </td>
        </tr>
            <tr>
           <td><label>SETTING TYPE</label></td>
            <td><select name="SETTING_TYPE" required>
            <option value = "MIXED"><name="SETTING_TYPE">MIXED</option>
	    <option value = "SEPARATE" selected><name="SETTING_TYPE">SEPARATE</option>
            
         </select>
            </td>
             </tr>
              <tr>
           <td><label>GENERAL SETTING LOCATION NUMBER</label></td>
            <td>
                <input type="text" name="GENERAL_SETTING_LOCATION_NUMBER" maxlength="10" required/>
            </td>
        </tr>
             <tr>
           <td><label>TURKEY BREED</label></td>
            <td>
                <input type="text" name="BREED" maxlength="10" required />
            </td>
        </tr>

    </table>
    
   
        <input type="submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
		</form>
    
</body>
</html>