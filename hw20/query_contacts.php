<?php
include("functions.php");
//here we load dynamic data
$dblink=db_connect("contact_data"); //connects db
$sql="Select * from `contact_info`"; //selects all data from table contact_info
$result=$dblink->query($sql) or
	die("Something went wrong with $sql ".$dblink->error);
while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
	echo '<tr>';
	echo '<td>'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['phone'].'</td>';
	echo '<td>'.$data['comments'].'</td>';
	echo '</tr>';

}
?>