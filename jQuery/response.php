<?php 
$Make = $_POST['Make'] ;
$Day = date("l");

switch ($Make ) {
    case "Dodge":
       echo "<h1>Dodge</h1>";
        echo "<p>The perfect vehicles for big families on a budget. $Day is Dodge day at Sam's Used Cars. Sam has an excellent selection of quality used Dodge vehicles</p>";
        break;
   case "Ford":
       echo "<h1>Ford</h1>";
       echo "<p>The Ford Explorer is America's Favorite SUV. $Day is Ford day at Sam's Used Cars. Sam has an excellent selection of quality used Ford vehicles</p>";
        break;
   case "Honda":
       echo "<h1>Honda</h1>";
       echo "<p>$Day is Honda day at Sam's Used Cars.  Come on down...</p>";
             break;
    default:
   	echo "<h1>$Make</h1>";       
   	echo "<p>$Day is your lucky day at Sam's Used Cars.  If we don't have a $Make we'll find one for you!</p>";
             break;

}
 ?>