<?php
session_start();
session_destroy();
echo "You have successfully logged out. <br>";
 echo "<p><a href='login2.html'>Log in</a>";
?>