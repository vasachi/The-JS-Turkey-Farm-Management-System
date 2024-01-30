<html>
<head>
<title>farm shop</title>
</head>
<body bgcolor="#67ed15" text="black" align="center">
<form method="post" action="turkeyshop_insert.php">
<h1 align="center"> THE J.S TURKEY🦃 FARM-TURKEY MART🏪</h1> 
<h1>PLEASE SELECT THE ITEM TO PURCHASE</h1>
<fieldset>
<label>Live Turkey Products</label>
<select name="l_tproducts">
<option value="mature male turkeys"><name="l_tproducts">Mature male turkeys</option>
<option value="mature female turkeys"><name="l_tproducts">Mature female turkeys</option>
<option value="male turkey chicks"><name="l_tproducts">male turkey chicks</option>
<option value="female turkey chicks"><name="l_tproducts">female turkey chicks</option>
<option value="turkey eggs"><name="l_tproducts">turkey eggs</option>
</select>

<br><br>

<label>Turkey Breed</label>
<select name="breed">
<option value="Beltsville Small White"><name="breed">Beltsville Small White</option>
<option value="Black turkey"><name="breed">Black turkey</option>
<option value="Bourbon Red"><name="breed">Bourbon Red</option>
<option value="Bronze"><name="breed">Bronze</option>
<option value="Narragansett"><name="breed">Narragansett</option>
<option value="Royal Palm"><name="breed">Royal Palm</option>
<option value="Slate"><name="breed">Slate</option>
<option value="White Holland"><name="breed">White Holland</option>
<option value="American Bronze"><name="breed">American Bronze</option>
<option value="American Black"><name="breed">American Black</option>
<option value="French turkey"><name="breed">French turkey</option>
<option value="English Turkey"><name="breed">English Turkey</option>
<option value="Norfolk Black turkey"><name="breed">Norfolk Black turkey</option>
</select>

<br><br>

<label>Enter Number</label> <input type="number" name="number">
</fieldset>
<br>

<h1>Manufacturing Raw Materials</h1>
<fieldset>
<label>OtherTurkey Products</label>
<select name="O_tproducts">
<option value="turkey feathers"><name="O_tproducts">turkey feathers</option>
<option value="turkey bones"><name="O_tproducts">turkey bones</option>
<option value="turkey manure"><name="O_tproducts">turkey manure</option>
</select>

<br><br>
<label>Enter Weight(KG)</label>
<input type="number" name="weight">
</fieldset>
<br>

<h1>Delivery Address</h1>
<fieldset>
<label>Full Names</label>
<input type="text" name="customer_name">

<br><br>

<label>Phone Number</label>
<input type="text" name="phone_no">

<br><br>

<label>City/Town</label>
<input type="text" name="city">

<br><br>

<label>Delivery Address</label>
<input type="text" name="address">

<br><br>


</fieldset>

<br><br>

<input type="submit" value="ORDER">
</form>
</body>
</html>