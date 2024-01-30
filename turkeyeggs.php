<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
    <meta charset="utf-8" />
    <title>TURKEY🦃 EGGS PRODUCTION</title>
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

    <h1>TURKEY🦃 EGGS</h1>
    <form action="eggsinsert.php" method="post">
    <table cellspacing="5" align="center" cellpadding="15">
	
         <tr>
            <td><label>EGGS BATCH NUMBER</label></td>
            <td>
                <input type="text"  name="EGGS_BATCH_NUMBER" maxlength="10" required />
            </td>
        </tr>
         <tr>
            <td><label>BIRD BREED</label></td>
            <td>
                <input type="text" name="BIRD_BREED" maxlength="10" required />
            </td>
        </tr>
         <tr>
            <td><label>COLLECTION DATE</label></td>
            <td>
                <input type="date" name="COLLECTION_DATE" required />
            </td>
        </tr>
        <tr>
            <td><label>TO BE SOLD</label></td>
            <td>
                <input type="text" name="TO_BE_SOLD" maxlength="10" required />
            </td>
        </tr>
        <tr>
            <td><label>FOR INCUBATION</label></td>
            <td>
                <input type="text" name="FOR_INCUBATION" maxlength="10" required/>
            </td>
        </tr>
        <tr>
            <td><label>INCUBATOR NUMBER</label></td>
            <td>
                <input type="text" name="INCUBATOR_NUMBER" maxlength="10" required />
            </td>
        </tr>
       
    </table>
    
   
        <input type="submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	</form>
    
</body>
</html>