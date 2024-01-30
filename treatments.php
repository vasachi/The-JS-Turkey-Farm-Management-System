<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
    <meta charset="utf-8" />
    <title>🦃FARM VET</title>
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
    
   background-color: ORANGE; 
 
}
</style>

<body align="center">
    <h1>TURKEY🦃 TREATMENTS</h1>
    <form action="treatmentinsert.php" method="post" >
    <table cellspacing="5" align="center" cellpadding="15">
         <tr>
            <td>EGGS BATCH NUMBER</td>
            <td>
                <input type="text" name="EGGS_BATCH_NUMBER" maxlength="10" required />
            </td>
        </tr>
		<tr>
            <td>DATE SIGNS AND SYMPTOMS WERE REPORTED</td>
            <td>
                <input type="date" name="ONSET_OF_SYMPTOMS" required />
            </td>
        </tr>
		<tr>
            <td>TYPE OF INFECTION</td>
            
             <td><select name="TYPE_OF_INFECTION" required>
            <option value = "VIRAL"><name="TYPE_OF_INFECTION">VIRAL</option>
	    <option value = "FUNGAL"><name="TYPE_OF_INFECTION">FUNGUS</option>
            <option value = "BACTERIAL" selected><name="TYPE_OF_INFECTION">BACTERIAL</option>
            <option value = "MALNUTRITION"><name="TYPE_OF_INFECTION">MALNUTRITION</option>
            
         </select>
            </td>
        </tr>
          <tr>
            <td>DATE TREATMENT BEGAN</td>
            <td>
                <input type="date" name="TREATMENT_START" required />
            </td>
        </tr>
        
         <tr>
            <td>TYPE OF MEDICINE USED</td>
        
             <td><select name="MEDICINE_USED" required>
            <option value = "ANTI-VIRAL"><name="MEDICINE_USED">ANTI-VIRAL</option>
	    <option value = "ANTI-FUNGAL"><name="MEDICINE_USED">ANTI-FUNGAL</option>
            <option value = "ANTI-BACTERIAL" selected><name="MEDICINE_USED">ANTI-BACTERIAL</option>
            <option value = "VITAMINS AND MINERALS"><name="MEDICINE_USED">VITAMINS AND MINERALS</option>
            
         </select>
            </td>
        </tr>
             <tr>
           <td>CIRCLE LOCATION NUMBER</td>
            <td>
                <input type="text" name="CIRCLE_LOCATION_NUMBER" maxlength="10" required />
            </td>
        </tr>
             
		<tr>
            <td>DATE TREATMENT WILL END</td>
            <td>
                <input type="date" name="TREATMENT_END" maxlength="10" required/>
            </td>
        </tr>

    </table>
    
   
        <input type="submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	</form>
    
</body>
</html>