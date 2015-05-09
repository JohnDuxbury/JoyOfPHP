<html>
<head>
<title>Sam's Used Cars</title>
<style>
    .box{
	border: 1px solid #ccc; margin:auto; padding:10px; width:440px;
	-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;background-color:#FFFFFF;-webkit-box-shadow: #B3B3B3 17px 17px 17px;-moz-box-shadow: #B3B3B3 17px 17px 17px; box-shadow: #B3B3B3 17px 17px 17px;
    }
</style>
</head>

<body background="" background="#ffffff">

<div class="box">
<center><h1>Sales report</h1></center>
</div>
<?php
    include 'db.php';
    $query = "SELECT * FROM INVENTORY WHERE SALE_DATE IS NOT NULL";
    //  $query = "SELECT * FROM INVENTORY";

    
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, No vehicles matching your search criteria found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each

while ($result_ar = mysqli_fetch_assoc($result)) {
    $vin = $result_ar['VIN'];
    $year = $result_ar['YEAR'];
    $make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE']; 
    $transmission = $result_ar['TRANSMISSION']; 
    $price = $result_ar['ASKING_PRICE'];
    $purchase_date=$result_ar['PURCHASE_DATE'];
    $purchase_price=$result_ar['PURCHASE_PRICE'];
    $sale_date=$result_ar['SALE_DATE'];
    $sale_price=$result_ar['SALE_PRICE'];
    $gross=$sale_price - $purchase_price;
    $percentage=($sale_price/$price)*100;
    
    
    echo "<center><div class=\"box\">";
    echo "<p><b><font color=gray size=5>$make $model</font></b></p>";
    echo "<p><b><u>Purchase Price:</u></b></br> $purchase_price </p>";
    echo "<p><b><u>Purchase Date:</u></b></br> $purchase_date </p>";
    echo "<p><b><u>Sell Price:</u></b></br> $sale_price </p>";
    echo "<p><b><u>Sell Date:</u></b></br> $sale_date </p>";


    $date1 = $purchase_date;
    $date2 = $sale_date;
    $diff = abs(strtotime($date2) - strtotime($date1));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    
    echo "<p><b><u>Time in lot:</u></b></br>".$years." Years ".$months." Months ".$days." Days "."</p>";
    
    echo "<p><b><u>Gross profit:</u></b></br>". $gross ."</p>";
    
    echo "<p><b><u>Percentage of asking price:</u></b></br>". number_format($percentage, 1) ."%</p>";
    
    echo "</div></center>";

   
}
$mysqli->close();
   
?>

</body>

</html>
