<!DOCTYPEJS html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>DATABASE SYSTEM MENU</title>
<script>
function logout() {
    
    window.location.assign = 'login3.php'; 
    
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
<style> 
body {
    
   background-color:white ; 
    
}
</style>
<section>
<body align="center">
<hr color="blue" width=100%>
<h1><b><i>JS TURKEY🦃 FARM DATABASE</h1>
<hr color="blue" width=100%>

<a href= displaymturkeys.php />
<caption>INFORMATION ABOUT MATURE TURKEYS</caption>

<br><br>
<a href= displayturkeychicks.php />
<caption>INFORMATION ABOUT TURKEY CHICKS</caption>

<br><br> 
<a href= displayturkeyeggs.php />
<caption>INFORMATION ABOUT TURKEY EGGS PRODUCTION</caption>

<br> <br>
<a href= displayturkeyai.php />
<caption>INFORMATION ABOUT TURKEY ARTIFICIAL INSERMINATION</caption>

<br> <br>
<a href= displayturkeyvaccination.php />
<caption>INFORMATION ABOUT TURKEY VACCINATION SCHEDULE</caption>

<br> <br>
<a href= displaytreatments.php />
<caption>INFORMATION ABOUT TREATMENT OF INFECTIONS AND DISEASES IN TURKEYS</caption>

<br> <br>
<a href= dispalyturkeyfeeds.php />
<caption>INFORMATION ABOUT TURKEY FEEDS INVENTORY</caption>

<br> <br>
<a href= displayvetsupplies.php />
<caption>INFORMATION ABOUT TURKEY PHARMACEUTICALS INVENTORY</caption>

<br> <br>
<a href= displayturkey_shop.php />
<caption>INFORMATION ABOUT ORDERS FROM THE TURKEY SHOP</caption>

<br><br>
<a href= specialisedsearch.php />
<caption>SPECIALISED SEARCH</caption>
<br><br>
</section>
<input type="button" name="log"  value="LOGOUT" onclick="logout()">


</body>
</html>