<?php
echo '<section id="home">';
echo '<h2>Please log-in below.</h2>';
if (!isset($_POST['submit'])) 
{
	echo '<form method="post" action="">';
	echo '<div class="form-group" id = "user_name_group" name="user_name_group">';
	echo '<label  class="control-label" for="username">Username: </label>';     
	echo '<input type="text" id="username" class="form-control" name="username" />';
	echo '<div id="unFeedback"></div>';
	echo '</div>';
	echo '<div class="form-group" id = "password_group">';
	echo '<label  class="control-label" for="password">Password: </label>';     
	echo '<input type="password" class="form-control" id="password" name="password" />';
	echo '<div id="pwFeedback"></div>';
	echo '</div>';
	echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
	echo '</form>';
}
if (isset($_POST['submit']))
{
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24-01";
	$password=hash('sha256',$salt.$passText.$username);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with $sql<br>".$dblink->error);
	if ($result->num_rows <= 0)  
		redirect("index.php?page=login&errMsg=invalidAuth");
	else
	{
		$salt=microtime();
		$sid=hash('sha256',$salt.$password);
		$sql="Update `accounts` set `session_id`='$sid' where `auth_hash`='$password'";
		$dblink->query($sql) or
			die("<p>Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=results&sid=$sid");
	}
}
echo '</section>';
?>
