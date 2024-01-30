<!DOCTYPEJS🦃 html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>🦃STORES FORM</title>
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
    
   background-color: pink; 
 
}
</style>

<body align="center">
    <h1>TURKEY🦃 FEEDS INVENTORY</h1>
	<form action="feedsinsert.php"  method="post">
    <table cellspacing="5" align="center" cellpadding="15">
        <tr>
         <td><label>CHICK MASH</label></td>
            <td>
                <input type="text" name="CHICK_MASH" placeholder="enter net weight" maxlength="10" required />
            </td>
           </tr>
        <tr>
            <td><label>GROWERS MASH</label></td>
            <td>
                <input type="text" name="GROWERS_MASH" placeholder="enter net weight" maxlength="10" required/>
            </td>
        </tr>
        <tr>
            <td><label>LAYERS MASH</label></td>
            <td>
                <input type="text" name="LAYERS_MASH" class="input text" placeholder="enter net weight" maxlength="10" required />
            </td>
        </tr>
             <tr>
            <td><label>SUPPLIER</label></td>
            <td>
                <input type="text" name="SUPPLIER" placeholder="enter products supplier" maxlength="10" required />
            </td>
        </tr>
        <tr>
            <tr>
            <td><label>PRODUCTS MANUFACTURER</label></td>
            <td><select name="PRODUCT_MANUFACTURER" required>
            <option value = "UNGA FEEDS" selected><name="PRODUCT_MANUFACTURER">UNGA FEEDS LIMITED</option>
            <option value = "PIONEER FEEDS"><name="PRODUCT_MANUFACTURER">PIONEER FEEDS LIMITED</option>
            <option value = "PEMBE FEEDS"><name="PRODUCT_MANUFACTURER">PEMBE FEEDS LIMITED</option>
         </select>
                
            </td>
        </tr>
        <tr>
           
            <td><label>PAYMENT METHOD</label></td>
            <td><select name="PAYMENT_METHOD" required>
            <option value = "M-PESA" selected><name="PAYMENT_METHOD">M-PESA</option>
            <option value = "CO-OPERATIVE BANK"><name="PAYMENT_METHOD">CO-OPERATIVE BANK</option>
            <option value = "KCB BANK"><name="PAYMENT_METHOD">KCB BANK</option>
         </select>
                
            </td>
        </tr>
        <tr>
            <td><label>TOTAL VALUE OF TURKEY FEEDS</label></td>
            <td>
                <input type="text" name="TOTAL_VALUE_OF_FEEDS" placeholder="enter total value of goods" maxlength="10" required/>
            </td>
        </tr>
        <tr>
            <td><label>ARRIVAL DATE</label></td>
            <td>
                <input type="date" name="ARRIVAL_DATE" required />
            </td>
        </tr>
        <tr>
            <td><label>SCHEDULED NEXT SHIPMENT DATE</label></td>
            <td>
                <input type="date" name="NEXT_SHIPMENT_DATE" required/>
            </td>
        </tr>
        <tr>
            <td><label>SUPPLY CHAIN NUMBER</label></td>
            <td>
                <input type="text" name="SCM_NUMBER" placeholder="enter supply id" maxlength="10" required />
            </td>
        </tr>
        </table>
    
         <input type="Submit" value="SUBMIT">
	 <input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	</form>

    
</body>
</html>