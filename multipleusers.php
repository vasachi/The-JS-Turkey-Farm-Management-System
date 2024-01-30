<!DOCTYPEJS HTML>
<html>
<head>

<title>login🦃 </title>


<script>
function users(userType)
{
  var username = document.forms["myform"]["uname"].value;
  var password =document.forms["myform"]["pass"].value;
  switch(userType) {
    case 'admin1':
      username = 'admin1';
      password = 'shivachi';
	window.location.href="landingpage.php
      break;
    case 'FarmHand':
      username = 'FarmHand';
      password = 'turkeyhelp';
	window.location.href="landingpage.php
      break;
    case 'FarmVet':
      username = 'FarmVet';
      password = 'turkeyhealth';
	window.location.href="landingpage.php
      break;
    case 'FarmAcc':
      username = 'FarmAcc';
      password = 'turkeycash';
	window.location.href="landingpage.php
      break;
    
    default:
     alert("invalid username and password");
      break;
  }
}
</script>
</head>
<body>
<body align="center">
  
<body background="E:\chrome download\THE JS TURKEY FARM LOGOS\THE JS TURKEY FARM-logos.jpeg">
<h1>TO RECORD TURKEY 🦃 PRODUCTION PLEASE ENTER YOUR LOGIN DETAILS</h1>

<div class="div1">
<form name="myform" method="post">
<label>USER NAME</label> 
    <i class="fas fa-user"></i> 
<input type="text" name="uname" class="inputtext" placeholder="username" required>
<br><br>
<label>PASSWORD</label>
<i class="fas fa-lock"></i>
<input type="password" name="pass" class="inputtext" placeholder="password" required>
<br><br>
<input type="button" name="log" id="logButton" value="LOGIN" onclick="users(userType)">
<input type="reset" value="RESET">
<br><br>
</form>
