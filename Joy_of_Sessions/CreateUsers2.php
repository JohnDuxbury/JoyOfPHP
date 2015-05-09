<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Joy of PHP - Creating the 'users' table.</title>
</head>

<body background="bg.jpg">
<p><img alt="The Joy of PHP" height="87" src="joy_logo.jpg" width="809" /></p>
<h2>Creating the 'users' table in the 'cars' database.</h2>


<?php
/**
 * Joy of PHP sample code
 * Demonstrates how to add a table to an existing database, and insert records.
 */
 include 'db.php';
 
//select a database to work with
$mysqli->select_db("Cars");
   Echo ("Selected the Cars database...<BR><BR>");

//build a SQL query to create the table
$query = " CREATE TABLE `users` 
( `id` int(4) NOT NULL auto_increment, `username` varchar(65) NOT NULL, `password` varchar(65) NOT NULL, `role` varchar(65) NOT NULL, PRIMARY KEY (`id`))";
//echo "<p>***********</p>";
//echo $query ;
//echo "<p>***********</p>";
if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'users' created</P>";
}
else
{
    echo "<p>Error: </p>" . mysqli_error($mysqli)."</p>";
     echo $query;
}
// Add a record for Sam
$encrypted_password=md5("pw123");
$query =  "INSERT INTO users (username, password, role) VALUES ( 'Sam', '$encrypted_password', 'Owner'), ( 'Pat', '$encrypted_password', 'Data Entry');";


if ($mysqli->query($query) === TRUE) {
    echo "<p>Sam's record was inserted into users table. </p>";
}
else
{
    echo "<p>Error inserting Sam: </p>" . mysqli_error($mysqli);
    echo "<p>***********</p>";
    echo $query ;
    echo "<p>***********</p>";
}

$mysqli->close();
include 'footer.php';
?>
</body>
</html>