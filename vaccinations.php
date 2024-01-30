<!DOCTYPEJS🦃 html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>TURKEY🦃 VACCINATION SCHEDULE</title>
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
    
   background-color: orange; 
   
}
</style>

<body align="center">
    <h1>TURKEY🦃 VACCINATION SCHEDULE</h1>

    <table cellspacing="5" align="center" cellpadding="15">
<form action="vaccineinsert.php" method="post"

    <table cellspacing="5" align="center" cellpadding="15">

         <tr>
            <td><label>EGGS BATCH NUMBER</label></td>
            <td>
                <input type="text" name="EGGS_BATCH_NUMBER" maxlength="10" required />
            </td>
        </tr>
        <tr>
            <td><label>DATE OF HATCHING</label></td>
            <td>
                <input type="date" name="DATE_OF_HATCHING" required />
            </td>
        </tr>
        <tr>
            <td><label>AGE OF TURKEYS</label></td>
		 <td>
		   <input type="text" name="AGE_OF_TURKEYS" maxlength="10" required />
		 </td>
        </tr>
	     <tr>
            <td><label>VACCINE NAME</label></td>
		<td>
		 <input type="text" name="VACCINE_NAME" maxlength="10" required/>
		</td>
             </tr>
             <tr>
          <td><label>ROUTE OF ADMINISTRATION</label></td>
         <td><select name="ROUTE_OF_ADMINISTRATION" required >
            <option value = "SPRAY"><name="ROUTE_OF_ADMINISTRATION">SPRAY</option>
	    <option value = "ORAL"><name="ROUTE_OF_ADMINISTRATION">ORAL</option>
            <option value ="WING WEB"><name="ROUTE_OF_ADMINISTRATION">WING WEB</option>
	    <option value="THIGH INJECTION"><name="ROUTE_OF_ADMINISTRATION">THIGH INJECTION</option>
		</SELECT>
            </tr>
          <tr>
          <td><label>DATE OF ADMINISTRATION</label></td>
            <td>
                  <input type="date" name="DATE_OF_ADMINISTRATION" required />
            </td>
            </tr>
            <tr>
            <td><label>TYPE OF DISEASE</label></td>
            <td>
                <input type="text" name="TYPE_OF_DISEASE" maxlength="10" required/>
            </td>
        </tr>
      
    </table>
    
   
        <input type="submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	 </form>
    
</body>
</html>