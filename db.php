 <?php
$mysql_host = "mysql17.000webhost.com";
$mysql_database = "a3532380_Cars";
$mysql_user = "a3532380_Cars";
$mysql_password = "7qA-SBq-NZC-q3E";
$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db($mysql_database);
echo "Connected to $mysql_database"; 
?>
