<?php
session_start();
if(!isset($_SESSION['MyUserName']))
{
   // echo "it isn't a match";
 header("location:login.html");
}
?>
<html>
<body>
Login Successful
</body>
</html>
