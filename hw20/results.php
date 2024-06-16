<script src="assets/js/jquery-3.5.1.js"></script>
<?php
if (isset($_REQUEST['sid']) && $_REQUEST['sid']!='') 
{
	$sid=addslashes($_REQUEST['sid']);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `session_id`='$sid'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with: $sql<br>".$dblink->error);
	if ($result->num_rows<=0)
		redirect("index.php?page=login&errMsg=InvalidSid");
	echo '<section id="home">'; 
	echo '<table class="table table-striped">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>First Name</th>';
	echo '<th>Lastt Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone</th>';
	echo '<th>Comments</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody id="results">';
	echo '</tbody>';
	echo '</table>';
	echo '</section>';
}
else 
	redirect("index.php?page=login&errMsg=NullSid");
?>
<script>
	function refresh_data(){
		$.ajax({ //$. refers to the jquery page (line 1 of results.php), and ajax is a top level function of jquery which accepts an array as a parameter
			type: 'post', //post allows us to send and recieve data vs get which only recieves data so why not use it
			url: 'https://ec2-3-101-106-184.us-west-1.compute.amazonaws.com/hw19/query_contacts.php', //this is the fqdn of the resource i am trying to access
			success: function(data) { //upon success execute this function "function(data)" which takes the results from our url, this is equivalent to "getElemtnById('results').innerHTML=data"
				$('#results').html(data);
			}
		});
	}
setInterval(function(){ refresh_data(); }, 500); //run this refresh_data function every 500 ms
</script>