 <?php
$mysqli = new mysqli('localhost', 'root', 'jenny123', 'cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("Cars");
 
?>