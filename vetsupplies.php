<!DOCTYPEJS🦃 html>
<html lang="en"
<head>
    <meta charset="utf-8" />
    <title>🦃VETINARY PHARMACEUTICALS INVENTORY</title>
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
     
    <h1>🦃VETINARY PHARMACEUTICALS INVENTORY</h1>

	<table cellspacing="5" align="center" cellpadding="15">
    <form action="vetsuppliesinsert.php" method="post">
    
        <tr>
            <td><label>ANTI VIRALS</label></td>
            <td>
                <input type="text" name="ANTI_VIRALS" placeholder="enter name of medicine" maxlength="10" required />
            </td>
        </tr>
        <tr>
            <td><label>ANTI BACTERIALS</label></td>
            <td>
                <input type="text" name="ANTI_BACTERIALS" placeholder="enter name of medicine" maxlength="10" required/>
            </td>
        </tr>
        <tr>
            <td><label>SUPPLEMENTS </label></td>
            <td>
                <input type="text" name="SUPPLEMENTS" placeholder="enter name of suppliments" maxlength="10" required />
            </td>
        </tr>
             <tr>
            <td><label>EQUIPMENT AND DEVICES</label></td>
            <td>
                <input type="text" name="EQUIPMENT_DEVICES" placeholder="enter equipment name" maxlength="10" required />
            </td>
        </tr>
        <tr>
            <tr>
            <td>PRODUCTS MANUFACTURER</td>
            <td><select name="PRODUCT_MANUFACTURER" required >
            <option value = "COSMOS LIMITED" selected><name="PRODUCT_MANUFACTURER>COSMOS LIMITED</option>
            <option value = "NORBROOK KENYA LIMITED"><name="PRODUCT_MANUFACTURER>NORBROOK KENYA LIMITED</option>
            <option value = "VETCARE KENYA LIMITED"><name="PRODUCT_MANUFACTURER>VETCARE KENYA LIMITED</option>
            <option value = "ULTRAVETIS E.A LIMITED"><name="PRODUCT_MANUFACTURER>ULTRAVETIS E.A LIMITED</option>
            <option value = "BIODEAL LABORATORIES LIMITED"><name="PRODUCT_MANUFACTURER>BIODEAL LABORATORIES LIMITED</option>
         </select>
                
            </td>
        </tr>

         <tr>
            <td><label>SUPPLIER</label></td>
            <td>
                <input type="text" name="SUPPLIER" placeholder="enter products supplier" maxlength="10" required />
            </td>
        </tr>
        <tr>
           
            <td><label>PAYMENT METHOD</label></td>
            <td><select name="PAYMENT_METHOD" required >
            <option value = "M-PESA" selected><name="PAYMENT_METHOD">M-PESA</option>
            <option value = "CO-OPERATIVE BANK"><name="PAYMENT_METHOD">CO-OPERATIVE BANK</option>
            <option value = "KCB BANK"><name="PAYMENT_METHOD">KCB BANK</option>
         </select>
                
            </td>
        </tr>
        <tr>
            <td><label>TOTAL VALUE OF VETERINARY PRODUCTS</label></td>
            <td>
                <input type="text" name="PRODUCTS_TVALUE" placeholder="enter total value of veterinary products" maxlength="10" required />
            </td>
        </tr>
        <tr>
            <td><label>ARRIVAL DATE</label></td>
            <td>
                <input type="date" name="ARRIVAL_DATE" required/>
            </td>
        </tr>
        <tr>
            <td><label>NEXT SHIPMENT DATE</label></td>
            <td>
                <input type="date" name="NEXT_SHIPMENT_DATE" required />
            </td>
        </tr>
        <tr>
            <td><label>SUPPLY CHAIN NUMBER</label></td>
            <td>
                <input type="text" name="SCM_NUMBER" maxlength="10" required/>
            </td>
        </tr>
   </table>
    
   
         <input type="Submit" value="SUBMIT">
	<input type="button" name="log"  value="LOGOUT" onclick="logout()">
	<input type="reset" value="RESET">
	</form>
</body>
</html>