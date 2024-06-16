<?php
echo '<section id="home">';
//14:32 04/26
if (!isset($_POST['submit'])) 
{
	echo '<h2>Register: Please fill out the form below.</h2>';
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
	echo '<button class="btn btn-primary" name="submit" type="submit" value="submit">Submit</button>';
	echo '</form>';
}
if (isset($_POST['submit']))
{
	
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24-01";
	$password=hash('sha256',$salt.$passText.$username);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `username`='$username'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with $sql<br>".$dblink->error);
	if ($result->num_rows > 0) 
		redirect("index.php?page=register&errMsg=accountExists");
	else
	{
		$sql = "Insert into `accounts` (`username`,`auth_hash`) values ('$username','$password')";
		$dblink->query($sql) or
			die("<p>Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=login");
	}
}
echo '</section>';
?>
