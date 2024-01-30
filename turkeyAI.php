<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
    <meta charset="utf-8" />
    <title>🦃RESEARCH</title>
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
    <h1>TURKEY 🦃 ARTIFICIAL INERMINATION</h1>
<form action="AIinsert.php" method="post">
    
    <table cellspacing="5" align="center" cellpadding="15">
      <h2>MALE TURKEY(TOM)</h2>
         <tr>
            <td><label>EGGS BATCH NUMBER</label></td>
            <td>
                <input type="text" name="EGGS_BATCH_NUMBER_OF_TOM" class="EGGS 🥚 BATCH NUMBER" maxlength="10" required />
            </td>
        </tr>
		<tr>
            <td><label>BREED OF TOM</label></td>
            <td>
                <input type="text" name="BREED_OF_TOM" class="BREED OF TOM" maxlength="10" required/>
            </td>
        </tr>
                <tr>
            <td><label>AGE OF TOM</label></td>
            <td>
                <input type="text" name="AGE_OF_TOM" class="AGE OF TOM" maxlength="10" required/>
            </td>
        </tr>

    </table>
    <h3>FEMALE TURKEY(HEN)</h3>
<table cellspacing="5" align="center" cellpadding="15">
         <tr>
            <td><label>EGGS BATCH NUMBER</label></td>
            <td>
                <input type="text" name="EGGS_BATCH_NUMBER_OF_HEN" class="label>EGGS 🥚 BATCH NUMBER" maxlength="10" required />
            </td>
        </tr>
		<tr>
            <td><label>BREED OF HEN</label></td>
            <td>
                <input type="text" name="BREED_OF_HEN" class="BREED OF HEN" maxlength="10" required />
            </td>
        </tr>
	<tr>
            <td><label>AGE OF HEN</label></td>
            <td>
                <input type="text" name="AGE_OF_HEN" class="AGE OF HEN" maxlength="10" required />
            </td>
        </tr>
			<tr>
            <td>DATE ADMINISTERED</td>
            <td>
                <input type="date" name="DATE_ADMINISTERED" required/>
            </td>
        </tr>

</table>

        <input type="submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	</form>
    
</body>
</html>