<!DOCTYPE html>
<html>
<head>
<title>
JD's Joy of PHP
</title>
</head>
<body>
<h1>Hello World!</h1>
<p>Todays Date is the <?php echo date('jS \o\f F Y');?></p>
<p><?php
    $targetdate = mktime(0,0,0,12,25,2013);
    $today=time();
    $difference=($targetdate-$today);
    $daystogo=(int)($difference/86400);
    print "It is now only $daystogo days until Xmas";
    ?></p>
<p><b>PHP Version is: </b><?php echo phpversion();?></p>
<p><a href="http://www.joyofphp.com">Visit Joy of PHP!</a></p>
<p><img src="LVB.jpg" alt="So True"></p>
<p><a href="#top">Go to TOP of Page</a></p>
<table border="1">
<tr>
<th>Header 1</th>
<th>Header 2</th>
<th>Favourite Colour</th>
</tr>
<tr>
<td>First Name</td>
<td><form><input type="text" name="firstname"/></form></td>
<td>
<form>
Pick Your Favourite Colour:<br>
<input type="radio" name="colour" value="red"/>Red<br>
<input type="radio" name="colour" value="blue"/>Blue<br>
<input type="radio" name="colour" value="green"/>Green<br>
</form>
</td>
</tr>
<tr>
<td>Last Name</td>
<td><form><input type="text" name="lastname"/></form></td>
<td>
<form>
<input type="checkbox" name="vehicle" value="Bike">I have a bike<br>
<input type="checkbox" name="vehicle" value="Car">I have a car<br>
<form>
</td>
</tr>
<tr>
<td>Password</td>
<td><form><input type="password" name="pwd"/></form></td>
</tr>
</table>
<br>
</body>
</html>