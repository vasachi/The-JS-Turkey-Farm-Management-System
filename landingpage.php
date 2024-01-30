<!DOCTYPEJS🦃 html>
<html>
<head>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <meta charset="utf-8" />
    <title>SYSTEM MENU</title>

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
if(choice=="RECORD TURKEY ARTIFICIAL INSERMINATION")
{
window.location.href="turkeyAI.php";
}
if(choice=="RECORD TURKEY VACCINATION SCHEDULE")
{
window.location.href="vaccinations.php";
}
if(choice=="RECORD TREATMENT OF INFECTIONS AND DISEASES IN TURKEYS")
{
window.location.href="treatments.php";
}
if(choice=="RECORD TURKEY FEEDS INVENTORY")
{
window.location.href="feedsinventory.php";
}
if(choice=="RECORD TURKEY PHARMACEUTICALS INVENTORY")
{
window.location.href="vetsupplies.php";
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

<body align="left" background="E:\chrome download\THE JS TURKEY FARM LOGOS\THE JS TURKEY FARM-logos.jpeg">

<H1 align="center"><b><u><i>PLEASE ADHERE TO THE FOLLOWING INSTRUCTIONS WHEN ENTERING DATA ABOUT TURKEY🦃 PRODUCTION</H1>
<ol>
<li>ENSURE THE CORRECT DATA IS ENTERED INTO THE SYSTEM.</li>
<li>IN ADVENT OF ANY ERROR REGARDING THE DATA ENTERED PLEASE INFORM THE SYSTEM ADMIN IMMEDIATELY.</li>
<li>DATA CAN ONLY BE ENTERED ONCE AND CANNOT BE CORRECTED.</li>
<li>PLEASE SELECT THE FORM YOU WANT TO RECORD CAREFULLY.</li>
</ol>

<div class="div1">
<form name="reclanding" method="post">

<select name="choice" >
 <option value = "RECORD MATURE TURKEY PRODUCTION"><name="choice">RECORD MATURE TURKEY PRODUCTION</option>
 <option value = "RECORD TURKEY CHICKS PRODUCTION"><name="choice">RECORD TURKEY CHICKS PRODUCTION</option>
 <option value = "RECORD TURKEY EGGS PRODUCTION"><name="choice">RECORD TURKEY EGGS PRODUCTION</option>
 <option value = "RECORD TURKEY ARTIFICIAL INSERMINATION"><name="choice">RECORD TURKEY ARTIFICIAL INSERMINATION</option>
 <option value = "RECORD TURKEY VACCINATION SCHEDULE"><name="choice">RECORD TURKEY VACCINATION SCHEDULE</option>
 <option value = "RECORD TREATMENT OF INFECTIONS AND DISEASES IN TURKEYS"><name="choice">RECORD TREATMENT OF INFECTIONS AND DISEASES IN TURKEYS</option>
 <option value = "RECORD TURKEY FEEDS INVENTORY"><name="choice">RECORD TURKEY FEEDS INVENTORY</option>
 <option value = "RECORD TURKEY PHARMACEUTICALS INVENTORY"><name="choice">RECORD TURKEY PHARMACEUTICALS INVENTORY</option>
</select>


<input type="button" name="log" value="SELECT" onclick="selectfunction()">
<input type="button" name="log"  value="LOGOUT" onclick="logout()">
</body>
</html>
