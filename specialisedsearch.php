<!DOCTYPEJS html>
<html lang="en"
<head>


    <meta charset="utf-8" />
    <title>DATABASE SYSTEM MENU</title>
<style> 
body {
    
   background-color:white ; 
    
}
</style>
<script>
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


<body align="center" text="black >
<hr color="blue" width=100%>
<h1><b><i>THE J.S TURKEY🦃 FARM DATABASE</h1>
<hr color="blue" width=100%>

<br><br>
<a href= tblsearch5.php />
<caption>SEARCH ON TURKEY PRODUCTION</caption>

<br><br>
<a href= tblsearch6.php>
<caption>SEARCH ON TURKEY SUPPLIES</caption>

<br><br>
<a href= tblsearch7.php />
<caption>SEARCH ON TURKEY SHOP CUSTOMER ORDERS</caption>

</body>
</html>