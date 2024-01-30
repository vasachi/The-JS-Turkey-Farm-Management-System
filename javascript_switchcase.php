<!DOCTYPE html>
<html>
<body bgcolor="#3FFF7F" align="center" background="E:\chrome download\THE JS TURKEY FARM LOGOS\THE JS TURKEY FARM-logos.jpeg">

<form name="myform">
<h1>TO RECORD TURKEY 🦃 PRODUCTION PLEASE ENTER YOUR LOGIN DETAILS</h1>

  <label for="uname">Username👤 :</label>
  <input type="text" id="uname" name="uname"><br><br>
  <label for="pass">Password🗝:</label>
  <input type="password" id="pass" name="pass"><br><br>
  


<script>
function checkUser() {
  var username = document.forms["myform"]["uname"].value;
  var password = document.forms["myform"]["pass"].value;

  switch (username) {
    case "admin1":
      if (password === "shivachi") {
        window.location.href = "http://localhost/turkey_farm/landingpage.php";
      } else {
        alert("Incorrect password for admin1.");
      }
      break;
    case "FarmHand":
      if (password === "turkeyhelp") {
        window.location.href = "http://localhost/turkey_farm/farmhand_landing.php";
      } else {
        alert("Incorrect password for FarmHand.");
      }
      break;
    case "FarmVet":
      if (password === "turkeyhealth") {
         window.location.href = "http://localhost/turkey_farm/farmvet_landing.php";
      } else {
        alert("Incorrect password for FarmVet.");
      }
      break;
    case "FarmAcc":
      if (password === "turkeycash") {
        window.location.href = "http://localhost/turkey_farm/farmacc_landing.php";
      } else {
        alert("Incorrect password for FarmAcc.");
      }
      break;
    default:
      alert("Invalid username.");
  }
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


<button type="button" onclick="checkUser()">LOGIN</button>
<input type="reset" value="RESET">

</form>

</body>
</html>

