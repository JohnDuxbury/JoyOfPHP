<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Entry Form</title>
<style>
    .box{
	border: 1px solid #ccc; margin:auto; padding:10px; width:440px;
	-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;background-color:#FFFFFF;-webkit-box-shadow: #B3B3B3 17px 17px 17px;-moz-box-shadow: #B3B3B3 17px 17px 17px; box-shadow: #B3B3B3 17px 17px 17px;
    }
</style>
</head>
<body>
<h1>Sam's Used Cars
</h1>
<?php
include 'db.php';
$vin = $_GET['VIN'];
$query = "SELECT * FROM INVENTORY WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
 // Don't do anything if successful.
}
else
{
 echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
 $VIN = $result_ar['VIN'];
 $year = $result_ar['YEAR'];
 $make = $result_ar['Make'];
 $model = $result_ar['Model'];
 $trim = $result_ar['TRIM'];
 $color = $result_ar['EXT_COLOR'];
 $interior = $result_ar['INT_COLOR'];
 $mileage = $result_ar['MILEAGE'];
 $transmission = $result_ar['TRANSMISSION'];
 $price = $result_ar['ASKING_PRICE'];
 $sale_price=$result_ar['SALE_PRICE'];
 $purchase_price=$result_ar['PURCHASE_PRICE'];
}


echo "<form action=\"EditCar.php\" method=\"get\">";
echo "<center><div class=\"box\">";
echo "<p>VIN: <b>$VIN</b> </p>";
echo "<input type=hidden name=VIN value=$VIN />";
echo "<p><b><u>Year:</u></b></br><input name=\"year\" value=$year /></font></b></p>";
echo "<b><u>Make:</u></b><br />
	<select name=make>
	<option value=\"Ford\">Ford</option>
	<option value=\"Chrysler\">Chrysler</option>
	<option value=\"Honda\">Honda</option>
	<option value=\"Hyundai\">Hyundai</option>
	<option value=\"Toyota\">Toyota</option>
	<option value=\"Mazda\">Mazda</option>
	<option value=\"Audi\">Audi</option>
	<option value=\"Saab\">Saab</option>
	<option value=\"Mercedes\">Mercedes</option>
	<option value=\"Chevrolet\">Chevrolet</option>
	</select>";
echo "<p><b><u>Model:</u></b></br><input name=\"model\" value=$model /></font></b></p>";
echo "<p><b><u>Asking Price:</u></b></br><input name=\"price\" value=$price /></p>";
echo "<p><b><u>Exterior Color:</u></b></br><input name=\"color\" value=$color /> </p>";
echo "<p><b><u>Interior Color:</u></b></br> <input name=\"interior\" value=$interior /> </p>";
echo "<p><b><u>Trim:</u></b></br><input name=\"trim\" value=$trim  /></p>";
echo "<p><b><u>Mileage:</u></b></br><input name=\"mileage\" value=$mileage /></p>";
echo "<b><u>Transmission:</u></b><br />
	<select name=transmission>
	<option value=\"Manual\">Manual</option>
	<option value=\"Automatic\">Automatic 5 speed</option>
	<option value=\"4WD\">4WD</option>
	<option value=\"AWD\">AWD</option>
	</select><br />";
        
        echo "<p><b><u>Sale price:</u></b></br><input name=\"sale_price\" value=$sale_price /></font></b></p>";
        echo "<p><b><u>Sale price:</u></b></br><input name=\"purchase_price\" value=$purchase_price /></font></b></p>";
echo "<br /><input type=\"submit\" /><br />";
echo "</div></center>";

$mysqli->close();
?>


&nbsp;</form>
</body>
</html>