<!DOCTYPE html>
<html>
<body bgcolor="#3FFF7F" align="center" background="THE JS TURKEY FARM-logos_white.png">

<form name="myform">
<h1>TO RECORD TURKEY 🦃 PRODUCTION PLEASE ENTER YOUR LOGIN DETAILS</h1>

  <label for="uname">Username👤 :</label>
  <input type="text" id="uname" name="uname"><br><br>
  <label for="pass">Password🗝:</label>
  <input type="password" id="pass" name="pass"><br><br>
  


<script>
let attempts=3
function checkUser() {
  var username = document.forms["myform"]["uname"].value;
  var password = document.forms["myform"]["pass"].value;

  switch (username) {
    case "admin1":
      if (password === "shivachi") 
      {
	alert("FARM MANAGER, welcome to the farm production management system");
        window.location.href = "http://localhost/turkey_farm/landingpage.php";
      } else 
      {
	attempts --;//this decrements the tries to log into the system.
alert("invalid username and password,You have left "+attempts+" attempt" );// Disabling fields after 3 attempts.
if( attempts == 0)
{
	document.getElementById("uname").disabled = true;
	document.getElementById("pass").disabled = true;
	document.getElementById("logButton").disabled = true;
	document.getElementById("reset").disable=true;
	document.body.style.backgroundColor = "black";
	return false;
}
      }
      break;
    case "FarmHand":
      if (password === "turkeyhelp")
      {
	alert("FARM HAND, welcome to the farm production management system");
        window.location.href = "http://localhost/turkey_farm/farmhand_landing.php";
      } 
      else 
      {
        attempts --;//this decrements the tries to log into the system.
alert("invalid username and password,You have left "+attempts+" attempt" );// Disabling fields after 3 attempts.
if( attempts == 0)
{
	document.getElementById("uname").disabled = true;
	document.getElementById("pass").disabled = true;
	document.getElementById("logButton").disabled = true;
	document.getElementById("reset").disable=true;
	document.body.style.backgroundColor = "black";
	return false;
}
      }
      break;
    case "FarmVet":
      if (password === "turkeyhealth") 
      {
         alert("FARM VETERINARY OFFICER, welcome to the farm production management system");
         window.location.href = "http://localhost/turkey_farm/farmvet_landing.php";
      } 
      else 
      {
        attempts --;//this decrements the tries to log into the system.
alert("invalid username and password,You have left "+attempts+" attempt" );// Disabling fields after 3 attempts.
if( attempts == 0)
{
	document.getElementById("uname").disabled = true;
	document.getElementById("pass").disabled = true;
	document.getElementById("logButton").disabled = true;
	document.getElementById("reset").disable=true;
	document.body.style.backgroundColor = "black";
	return false;
}
      }
      break;
    case "FarmAcc":
      if (password === "turkeycash") 
      {
         alert("FARM ACCOUNTANT, welcome to the farm production management system");
        window.location.href = "http://localhost/turkey_farm/farmacc_landing.php";
      } 
      else 
      {
         attempts --;//this decrements the tries to log into the system.
alert("invalid username and password,You have left "+attempts+" attempt" );// Disabling fields after 3 attempts.
if( attempts == 0)
{
	document.getElementById("uname").disabled = true;
	document.getElementById("pass").disabled = true;
	document.getElementById("logButton").disabled = true;
	document.getElementById("reset").disable=true;
	document.body.style.backgroundColor = "black";
	return false;
}
      }
      break;
    default:
      alert("Invalid username.");
  }
}
</script>


<button type="button" id="logButton" onclick="checkUser()">LOGIN</button>
<input type="reset" value="RESET">

</form>

</body>
</html>

