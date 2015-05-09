
<html>

<head>
    <title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php 
// Capture the values posted to this php program from the text fields

$VIN =  trim( $_REQUEST['VIN']) ;
$year = trim($_REQUEST['Year']) ;
$Make = trim( $_REQUEST['Make']) ;
$Model = trim( $_REQUEST['Model']) ;
$trim = trim($_REQUEST['Trim']);
$Price =  $_REQUEST['Asking_Price'] ;
$mileage = $_REQUEST['Mileage'];
$transmission= $_REQUEST['Transmission'];
$ext_color=trim($_REQUEST['ext_color']);
$int_color=trim($_REQUEST['int_color']);
$purchase_price=trim($_REQUEST['Purchase_Price']);
$today = date("Y-d-m");
$today= mysql_real_escape_string($today);
//Build a SQL Query using the values from above

$query = "INSERT INTO Inventory
  (VIN, Make, Model, ASKING_PRICE , YEAR , TRIM , EXT_COLOR , INT_COLOR , PURCHASE_PRICE , MILEAGE , TRANSMISSION , PURCHASE_DATE )
   VALUES (
   '$VIN', 
   '$Make', 
   '$Model',
    $Price,
    $year,
    '$trim',
    '$ext_color',
    '$int_color',
    $purchase_price,
    $mileage,
    '$transmission',
    '$today'
    )";

// Print the query to the browser so you can see it
echo ($query. "<br>");

$mysqli = new mysqli('localhost', 'root', 'login1', 'cars' );
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
include 'footer.php'
?>
</body>
</html>