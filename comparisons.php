<!DOCTYPE html>
<html>
	<body>
		<h1>Open Hours</h1>	
		<?php
		date_default_timezone_set ( "EST" );
		if (date("n")==7)
		{
			switch (date("l"))
			{case 'Monday':
			echo "Sorry, we are closed today.";
			break;
			case 'Saturday':
			echo "We are open today from 9 AM to 9 PM";
			break;
			case 'Sunday':
			echo "We are open today from 9 AM to 9 PM";
			break;
			case 'Thursday':
			echo "We are open today from 10 AM to 7 PM<br>";
			break;}
		}
		else
		{
		switch (date("l"))
			{case 'Monday':
			echo "Sorry, we are closed today.";
			break;
			case 'Saturday':
			echo "We are open today from 9 AM to 9 PM";
			break;
			case 'Sunday':
			echo "We are open today from 9 AM to 9 PM";
			break;
			case 'Thursday':
			echo "We are open today from 10 AM to 6 PM<br>";
			break;}
		}
?>
</body>	
</html>

