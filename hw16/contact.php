
<!-- removing the HOME part made it look ugly, change so when we click submit it works properly-->
	<!-- HOME -->
	<section id="home">
		<?php
		session_start();
			if(!isset($_POST['submit']))
			{
				echo '<form method="post" action="" id="mainForm">';
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"firstNameNull"))
				{
					echo '<div class="form-group has-error" id="first_name_group">';
					echo '<label class="control-label" for="firstname">First Name: </label>';
					echo '<input type="text" id="firstname" class="form-control" name="firstname" />';
					echo '<div id="fnFeedback">First name cannot be blank.</div>';
					echo '</div>';
				}
				else { //there is no error, check for previously submitted data
					if (isset($_SESSION['firstname']) && $_SESSION['firstname']!='') //form loaded with previous data
					{
						echo '<div class="form-group has-success" id="first_name_group">';
						echo '<label class="control-label"for="firstname">First Name: </label>';
						echo '<input type="text" id="firstname" class="form-control" name="firstname" value="'.$_SESSION['firstname'].'" />';
						echo '<div id="fnFeedback"></div>';
						echo '</div>';
					}
					else //form loaded for first time
					{
						echo '<div class="form-group" id="first_name_group">';
						echo '<label class="control-label"for="firstname">First Name: </label>';
						echo '<input type="text" id="firstname" class="form-control" name="firstname"/>';
						echo '<div id="fnFeedback"></div>';
						echo '</div>';
					}	
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"lastNameNull"))
				{
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" id="lastname" class="form-control" name="lastname"/>';
					echo '<div id="lnFeedback"></div>';
					echo 'Last name cannot be blank';
					echo '</div>';
				}
				else
				{
					echo '<div class="form-group >';
					echo '<label class="control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" id="lastname" class="form-control" name="lastname"/>';
					echo '<div id="lnFeedback"></div>';
					echo '';
					echo '</div>';
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"emailNull"))
				{
					echo '<div class="form-group has-error" id = "email_address_group">';
					echo '<label class="control-label for="email">Email Address: </label>';        
					echo '<input type="text" id="email" class="form-control" name="email"/>';   
					echo '<div id="emailFeedback">Email cannot be blank.</div>';
				}
				else {
					echo '<div class="form-group" id = "email_address_group">';
					echo '<label class="control-label  for="email">Email Address: </label>';        
					echo '<input type="text" id="email" class="form-control" name="email"/>';   
					echo '<div id="emailFeedback"></div>';
					echo '</div>';
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"phoneNull"))
				{
					echo '<div class="form-group has-error" id="phone_number_group">';
					echo '<label  class="control-label for="phone" name="phone_number_group">Phone-Number: </label>';
					echo '<input type="text" id="phone" class="form-control" name="phone" />'; 
					echo '<div id="phoneFeedback">Phone Number cannot be blank.</div>';
					echo '</div>';
				}
				else 
				{
					echo '<div class="form-group" id="phone_number_group">';
					echo '<label  class="control-label for="phone" name="phone_number_group">Phone-Number: </label>';
					echo '<input type="text" id="phone" class="form-control" name="phone" />'; 
					echo '<div id="phoneFeedback"></div>';
					echo '</div>';
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"usernameNull"))
				{				
					echo '<div class="form-group has-error" id = "user_name_group" name="user_name_group">';
					echo '<label  class="control-label for="username">Username: </label>';        
					echo '<input type="text" id="username" class="form-control" name="username" />';
					echo '<div id="unFeedback">Username cannot be blank.</div>';
					echo '</div>';
				}
				else 
				{
					echo '<div class="form-group" id = "user_name_group" name="user_name_group">';
					echo '<label  class="control-label for="username">Create a username: </label>';        
					echo '<input type="text" id="username" class="form-control" name="username" />';
					echo '<div id="unFeedback"></div>';
					echo '</div>';
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"passwordNull"))
				{
					echo '<div class="form-group has-error" id = "password_group">';
					echo '<label  class="control-label for="password">Password: </label>';       
					echo '<input type="password" class="form-control" id="password" name="password" />';
					echo '<div id="pwFeedback">Password cannot be blank.</div>';
					echo '</div>';
				}
				else 
				{
					echo '<div class="form-group" id = "password_group">';
					echo '<label  class="control-label for="password">Create a password: </label>';       
					echo '<input type="password" class="form-control" id="password" name="password" />';
					echo '<div id="pwFeedback"></div>';
					echo '</div>';
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"commentsNull")) 
				{
					echo '<div class="form-group has-error" id="comments_group">';
					echo '<label  class="control-label for="comments">Comments: </label>';    
					echo '<textarea id="comments" class="form-control" name="comments"></textarea>  ';
					echo '<div id="commentsFeedback">Comments cannot be blank. </div>';
					echo '</div>';
				}
				else
				{
					echo '<div class="form-group" id="comments_group">';
					echo '<label  class="control-label for="comments">Comments: </label>';    
					echo '<textarea id="comments" class="form-control" name="comments"></textarea>  ';
					echo '<div id="commentsFeedback"></div>';
					echo '</div>';
				}
				
				
			echo '<div class="form-group">';
			echo '<button class="btn btn-primary" type="submit" name="submit"/>Submit</button>';    
			echo '</div>';   
			echo '</form>';
				
			}
			else
				{
					$errors="";//clear out all previous errors
					$_SESSION[]=array();//clear out all session data
					$_COOKIE[]=array(); //clear out previous cookies
					$firstName=$_POST['firstname'];

					if ($firstName==NULL)  //I am going to have an error
						$errors="firstNameNull";
					else //or no error and save submitted data using the SESSION superglobal
						$_SESSION['firstname']=$firstName;
				
					$lastName = $_POST['lastname'];
					if ($lastName == NULL)
						$errors.="lastNameNull";
					else
						$_SESSION['lastname']=$lastName;
				
					$email=$_POST['email'];
					if ($email == NULL)
						$errors.="emailNull";
					else
						$_SESSION['email']=$email;
				
					$phone=$_POST['phone'];
					if ($phone == NULL) 
						$errors.="phoneNull";
					else
						$_SESSION['phone']=$phone;
				
					$username=$_POST['username'];
					if ($username == NULL) 
						$errors.="usernameNull";
					else
						$_SESSION['username']=$username;
				
					$password=$_POST['password'];
					if ($password == NULL) 
						$errors.="passwordNull";
					else
						$_SESSION['password']=$password;
				
					$comments=$_POST['comments'];
					if ($comments == NULL) 
						$errors.="commentsNull";
					else
						$_SESSION['comments'] = $comments;
				
					if ($errors != NULL) {
						header("Location: contact.php?errMsg=$errors"); //this reloads the page and gets rid of the post info
					}
				 	echo '<h2>Hello from results</h2>';
					echo '<p>Last Name: ' . $_POST['lastname'] . '</p>'; 
					echo '<p>Email: ' . $_POST['email'] . '</p>';
					echo '<p>Phone: ' . $_POST['phone'] . '</p>';
					echo '<p>Username: ' . $_POST['username'] . '</p>';
					echo '<p>Password: ' . $_POST['password'] . '</p>';
					echo '<p>Comments: ' . $_POST['comments'] . '</p>';
					if ($_POST['username']=="admin")
					{
						 echo '<h2>Welcome to the admin dash</h2>';
					}
				}
			 ?>
	</section>
	
</body>
< <script src="assets/js/event-listener.js"></script>  <!-- fixed js corresponding logic bug -->
</html>
