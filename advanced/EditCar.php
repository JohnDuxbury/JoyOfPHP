<html>
<head>
<title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php
// Capture the values posted to this php program from the text fields in the form

 $VIN = $_GET['VIN'];
 $year = $_GET['year'];
 $make = $_GET['make'];
 $model = $_GET['model'];
 $trim = $_GET['trim'];
 $color = $_GET['color'];
 $interior = $_GET['interior'];
 $mileage = $_GET['mileage'];
 $transmission = $_GET['transmission'];
 $price = $_GET['price'];
 $sale_price= $_GET['sale_price'];
 $purchase_price= $_GET['purchase_price'];

//Build a SQL Query using the values from above

$query = "UPDATE inventory SET
YEAR=$year,
Make='$make', 
Model='$model', 
ASKING_PRICE=$price,
TRIM='$trim',
EXT_COLOR='$color',
INT_COLOR='$interior',
SALE_PRICE=$sale_price,
PURCHASE_PRICE=$purchase_price,
MILEAGE=$mileage,
TRANSMISSION = '$transmission'
WHERE
VIN='$VIN'"; 

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'db.php';
/* check connection */
if (mysqli_connect_errno()) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
}

 echo 'Connected successfully to mySQL. <BR>';

//select a database to work with
$mysqli->select_db("Cars");
 Echo ("Selected the Cars database. <br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
 echo "<p>You have successfully entered $Make $Model into the database.</P>";
}
else
{
 echo "Error entering $VIN into database: " . mysql_error()."<br>";
}
$mysqli->close();
?>
</body>
</html>