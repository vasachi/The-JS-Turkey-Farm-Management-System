<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <meta charset="utf-8" />
    <title>FarmHand Section</title>

<script>
function selectfunction()
{
var choice=document.forms["reclanding"]["choice"].value;
if(choice=="RECORD MATURE TURKEY PRODUCTION")
{
window.location.href="Mature_turkeys.php";
}

if(choice=="RECORD TURKEY CHICKS PRODUCTION")
{
window.location.href="turkeychicks.php";
}
if(choice=="RECORD TURKEY EGGS PRODUCTION")
{
window.location.href="turkeyeggs.php";
}
}
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
    
   background-color:white;
    
}
</style>

<body align="left">
<form name="reclanding" method="post">
<H1 align="center"><b><u><i>PLEASE ADHERE TO THE FOLLOWING INSTRUCTIONS WHEN ENTERING DATA ABOUT TURKEY🦃 PRODUCTION</H1>
<ol>
<li>ENSURE THE CORRECT DATA IS ENTERED INTO THE SYSTEM.</li>
<li>IN ADVENT OF ANY ERROR REGARDING THE DATA ENTERED PLEASE INFORM THE SYSTEM ADMIN IMMEDIATELY.</li>
<li>DATA CAN ONLY BE ENTERED ONCE AND CANNOT BE CORRECTED.</li>
<li>PLEASE SELECT THE FORM YOU WANT TO RECORD CAREFULLY.</li>
</ol>

<div class="div1">


<select name="choice" >
 <option value = "RECORD MATURE TURKEY PRODUCTION"><name="choice">RECORD MATURE TURKEY PRODUCTION</option>
 <option value = "RECORD TURKEY CHICKS PRODUCTION"><name="choice">RECORD TURKEY CHICKS PRODUCTION</option>
 <option value = "RECORD TURKEY EGGS PRODUCTION"><name="choice">RECORD TURKEY EGGS PRODUCTION</option>
</select>


<input type="button" name="log" value="SELECT" onclick="selectfunction()">
<input type="button" name="log"  value="LOGOUT" onclick="logout()">
</form>
</body>
</html>
