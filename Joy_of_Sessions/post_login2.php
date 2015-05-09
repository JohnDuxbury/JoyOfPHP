<?php
/**
 * Joy of PHP sample code
 * Demonstrates how to process a login form
 */
 include 'db.php';
 
//select a database to work with
$mysqli->select_db("a3532380_Cars");
Echo ("Selected the a3532380_Cars database...<BR><BR>");

// get the username and password from the login form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect against SQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

$encrypted_password=md5($mypassword);
//$query="SELECT * FROM USERS WHERE username='$myusername' and password='$encrypted_password' ";
$query ="SELECT * FROM USERS WHERE username='$myusername' and password='$mypassword'";
echo $query."<br>";
$result = $mysqli->query($query);

$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row count should be 1 row

if($count==1){

// Register session variables and redirect the user to "login_success.php" page
session_start();
$_SESSION['MyUserName']= $myusername;
while ($result_ar = mysqli_fetch_assoc($result)) {
    $_SESSION["Role"]= $result_ar['role'];
}
header("location:Home.php");
}
else {
echo "Wrong Username or Password";
}
?>