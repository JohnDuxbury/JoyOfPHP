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
<center><h1>Sam's Used Cars</h1></center>
</div>
<?php include 'db.php';
$maxprice=$_GET['maxprice'];
$make=$_GET['make'];
$query="";
if(isset($_GET['maxprice']))
    $query = "SELECT * FROM INVENTORY WHERE ASKING_PRICE<=$maxprice";
if(isset($_GET['make']))
    $query = "SELECT * FROM INVENTORY WHERE MAKE='$make'";
    
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

    echo "<center><div class=\"box\">";
    echo "<p><b><u>VIN:</u></b></br> $vin </p>";
    echo "<p><b><font color=gray size=5>$year $make $model</font></b></p>";
    echo "<p><b><u>Asking Price:</u></b></br> $price </p>";
    echo "<p><b><u>Exterior Color:</u></b></br> $color </p>";
    echo "<p><b><u>Interior Color:</u></b></br> $interior </p>";
    echo "<p><b><u>Trim:</u></b></br> $trim </p>";
    echo "<p><b><u>Mileage:</u></b></br> $mileage </p>";
    echo "<p><b><u>Transmission:</u></b></br> $transmission </p>";
    echo "</div></center>";

    echo "<div class=box>";
    $query_image = "SELECT * FROM images WHERE VIN='$vin'";
    /* Try to query the database */
    if ($result_image = $mysqli->query($query)) {
       // Got some results
       // Loop through all the rows returned by the query, creating a table row for each
    while ($result_ar_image = mysqli_fetch_assoc($result)) {
        $image = $result_ar_image['ImageFile'];
        echo "<img src='uploads/$image' width= '250'>  " ;
    }
    }
    echo "</div>";
}
$mysqli->close();
   
?>

</body>

</html>
