<!DOCTYPEJS HTML>
<html>
<head>

<title>login3🦃 </title>


<script>
function myfunction()
{
var choice=document.forms["myform2"]["choice"].value;
if(choice=="RECORD TURKEY PRODUCTION")
{
window.location.href="javascript_switchcase.php";
}

if(choice=="TURKEY PRODUCTION DATABASE")
{
window.location.href="databaselogin.php";
}

}
</script>

</head>
<body bgcolor="#FF3F9A" align="center" background="E:\chrome download\THE JS TURKEY FARM LOGOS\THE JS TURKEY FARM-logos.jpeg">

<h1>WELCOME TO THE TURKEY 🦃 PRODUCTION MANAGEMENT SYSTEM</h1>
<p>PLEASE SELECT THE SECTION TO CONTINUE WITH</p>

<div class="div1">
<form name="myform2" method="post">
<select name="choice" >
 <option value = "RECORD TURKEY PRODUCTION"><name="choice">RECORD TURKEY PRODUCTION</option>
 <option value = "TURKEY PRODUCTION DATABASE"><name="choice">TURKEY PRODUCTION DATABASE</option>
</select>
<br>
<br>
<input type="button" name="log" id="logButton" value="SELECT" onclick="myfunction()">

</form>

</body>
</html>
