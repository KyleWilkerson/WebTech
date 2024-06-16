<!doctype html>
<html>
<body>
<p> Welcome to my homepage</p>	
<?php
	global $today; //this makes $today available to everything inside of this script, it's still global to this script but only global to this script
	function myFunc () {
			$today="Some string"; //this $today has nothing to do with the $today variable, except since above we delcared a $today that is global it is the same
	}
	$today=date("F j, Y");
	echo "<p>Today is: $today</p>";
	echo '<p>Today is: $today</p>'; //'single quotes make php treat it like a string double quotes or no quotes don't
	echo '<p>Today is: '.$today+$tomorrow.'</p>'; //this is the preferred method to doing it, because when i seperate the variable from the string i can now apply methods/functions on the php variables and add to it and transform it as we did above
	//in php all variables have a single scope as in $today only exists for the current page called "index.php" 
	//super globals are available in all scopes, they are not delcared by ourselves but are universal, but only exist for that current user session which means that they are only existing for the time that we enter the page till we close it (logged in to logged out), it lets us know who's who, the moment you close the page the timer gets kicked off he server and if you reload the timer gets set back to 0 or after a certain ammount of time
	//switch()[] statements are vastly superior to if, else if, else statements as once a condition is met we are done and continue whereas with if else if else statements we have to check every single statement
	//additionally the communication now is many to one, and we are now wasting the client's time when using if else if else statments vs switch()[] 
	//most important loops are "foreach()[]" and "while()[]" loops
	//arrays are dynamically typed and can switch types which basically means they are objects
?>
</body>
</html>