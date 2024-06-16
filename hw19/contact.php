
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
				else if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"first name contains invalid syntax"))
				{
					echo '<div class="form-group has-error" id="first_name_group">';
					echo '<label class="control-label" for="firstname">First Name: </label>';
					echo '<input type="text" id="firstname" class="form-control" name="firstname" />';
					echo '<div id="fnFeedback">First name contains invalid syntax.</div>';
					echo '</div>';		 
				}
				else { //there is no error, check for previously submitted data
					if (isset($_SESSION['firstname'])) //form loaded with previous data
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
					echo '<div class="form-group has-error" id="last_name_group">';
					echo '<label class="control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" id="lastname" class="form-control" name="lastname"/>';
					echo '<div id="lnFeedback">Last name cannot be blank.</div>';
					echo '</div>';
				}
				else if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"last name contains invalid syntax"))
				{
					echo '<div class="form-group has-error" id="last_name_group">';
					echo '<label class="control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" id="lastname" class="form-control" name="lastname"/>';
					echo '<div id="lnFeedback">Last name contains invalid syntax.</div>';
					echo '</div>';
				}
				else
				{
					if (isset($_SESSION['lastname']))
					{
						echo '<div class="form-group has-success" id="last_name_group">';
						echo '<label class="control-label" for="lastname">Last Name: </label>';
						echo '<input type="text" id="lastname" class="form-control" name="lastname" value="'.$_SESSION['lastname'].'"/>';
						echo '<div id="lnFeedback"></div>';
						echo '</div>';
					}
					else 
					{
						echo '<div class="form-group" id="last_name_group">';
						echo '<label class="control-label" for="lastname">Last Name: </label>';
						echo '<input type="text" id="lastname" class="form-control" name="lastname"/>';
						echo '<div id="lnFeedback"></div>';
						echo '</div>';
					}
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"emailNull"))
				{
					echo '<div class="form-group has-error" id = "email_address_group">';
					echo '<label class="control-label" for="email">Email Address: </label>';        
					echo '<input type="text" id="email" class="form-control" name="email"/>';   
					echo '<div id="emailFeedback">Email cannot be blank.</div>';
				}
				else if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"email is incorrect"))
				{
					echo '<div class="form-group has-error" id = "email_address_group">';
					echo '<label class="control-label" for="email">Email Address: </label>';        
					echo '<input type="text" id="email" class="form-control" name="email"/>';   
					echo '<div id="emailFeedback">Email is incorrect format.</div>';
				}
				else {
					if (isset($_SESSION['email']))
					{
						echo '<div class="form-group has-success" id = "email_address_group">';
						echo '<label class="control-label"  for="email">Email Address: </label>';        
						echo '<input type="text" id="email" class="form-control" name="email" value="'.$_SESSION['email'].'"/>';   
						echo '<div id="emailFeedback"></div>';
						echo '</div>';
					}
					else 
					{
						echo '<div class="form-group has-success" id = "email_address_group">';
						echo '<label class="control-label"  for="email">Email Address: </label>';        
						echo '<input type="text" id="email" class="form-control" name="email"/>';   
						echo '<div id="emailFeedback"></div>';
						echo '</div>';
					}
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"phoneNull"))
				{
					echo '<div class="form-group has-error" id="phone_number_group">';
					echo '<label  class="control-label" for="phone" name="phone_number_group">Phone-Number: </label>';
					echo '<input type="text" id="phone" class="form-control" name="phone" />'; 
					echo '<div id="phoneFeedback">Phone Number cannot be blank.</div>';
					echo '</div>';
				}
				else if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"phone number can only contain digits"))
				{
					echo '<div class="form-group has-error" id="phone_number_group">';
					echo '<label  class="control-label" for="phone" name="phone_number_group">Phone-Number: </label>';
					echo '<input type="text" id="phone" class="form-control" name="phone" />'; 
					echo '<div id="phoneFeedback">Phone Number can only be made of digits.</div>';
					echo '</div>';
				}
				else 
				{
					if (isset($_SESSION['phone']))
					{
						echo '<div class="form-group has-success" id="phone_number_group">';
						echo '<label  class="control-label" for="phone" name="phone_number_group">Phone-Number: </label>';
						echo '<input type="text" id="phone" class="form-control" name="phone" value="'.$_SESSION['phone'].'" />'; 
						echo '<div id="phoneFeedback"></div>';
						echo '</div>';
					}
					else
					{
						echo '<div class="form-group " id="phone_number_group">';
						echo '<label  class="control-label" for="phone" name="phone_number_group">Phone-Number: </label>';
						echo '<input type="text" id="phone" class="form-control" name="phone" />'; 
						echo '<div id="phoneFeedback"></div>';
						echo '</div>';
					}
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"usernameNull"))
				{				
					echo '<div class="form-group has-error" id = "user_name_group" name="user_name_group">';
					echo '<label  class="control-label" for="username">Username: </label>';        
					echo '<input type="text" id="username" class="form-control" name="username" />';
					echo '<div id="unFeedback">Username cannot be blank.</div>';
					echo '</div>';
				}
				else 
				{
					if (isset($_SESSION['phone']))
					{
						echo '<div class="form-group has-success" id = "user_name_group" name="user_name_group">';
						echo '<label  class="control-label" for="username">Create a username: </label>';        
						echo '<input type="text" id="username" class="form-control" name="username" value="'.$_SESSION['phone'].'" />';
						echo '<div id="unFeedback"></div>';
						echo '</div>';
					}
					else 
					{
						echo '<div class="form-group" id = "user_name_group" name="user_name_group">';
						echo '<label  class="control-label" for="username">Create a username: </label>';        
						echo '<input type="text" id="username" class="form-control" name="username" />';
						echo '<div id="unFeedback"></div>';
						echo '</div>';
					}
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"passwordNull"))
				{
					echo '<div class="form-group has-error" id = "password_group">';
					echo '<label  class="control-label" for="password">Password: </label>';       
					echo '<input type="password" class="form-control" id="password" name="password" />';
					echo '<div id="pwFeedback">Password cannot be blank.</div>';
					echo '</div>';
				}
				else 
				{
					if (isset($_SESSION['password']))
					{
						echo '<div class="form-group has-success" id = "password_group">';
						echo '<label  class="control-label" for="password">Create a password: </label>';       
						echo '<input type="password" class="form-control" id="password" name="password" value="'.$_SESSION['password'].'" />';
						echo '<div id="pwFeedback"></div>';
						echo '</div>';
					}
					else 
					{
						echo '<div class="form-group" id = "password_group">';
						echo '<label  class="control-label" for="password">Create a password: </label>';       
						echo '<input type="password" class="form-control" id="password" name="password" />';
						echo '<div id="pwFeedback"></div>';
						echo '</div>';
					}
				}
				if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"commentsNull")) 
				{
					echo '<div class="form-group has-error" id="comments_group">';
					echo '<label  class="control-label" for="comments">Comments: </label>';    
					echo '<textarea id="comments" class="form-control" name="comments"></textarea>  ';
					echo '<div id="commentsFeedback">Comments cannot be blank. </div>';
					echo '</div>';
				}
				else
				{
					echo '<div class="form-group" id="comments_group">';
					echo '<label  class="control-label" for="comments">Comments: </label>';    
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
					$regex_name = "/^[A-Za-z'-]+$/";
					$regex_phone = "/^\d+$/";
					$regex_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
					$errors="";//clear out all previous errors
					//$_SESSION[]=array();//clear out all session data
					//$_COOKIE[]=array(); //clear out previous cookies
					$firstName=$_POST['firstname'];
					if ($firstName==NULL)  //I am going to have an error
						$errors="firstNameNull";
					else if (!preg_match($regex_name,$firstName)) 
						$errors="first name contains invalid syntax";
					else //or no error and save submitted data using the SESSION superglobal
						$_SESSION['firstname']=$firstName;
				
					$lastName = $_POST['lastname'];
					if ($lastName == NULL)
						$errors.="lastNameNull";
					else if (!preg_match($regex_name,$lastName)) 
						$errors="last name contains invalid syntax";
					else
						$_SESSION['lastname']=$lastName;
				
					$email=$_POST['email'];
					if ($email == NULL)
						$errors.="emailNull";
					else if (!preg_match($regex_email,$email))
						$errors.="email is incorrect";
					else
						$_SESSION['email']=$email;
				
					$phone=$_POST['phone'];
					if ($phone == NULL) 
						$errors.="phoneNull";
					else if (!preg_match($regex_phone,$phone))
						$errors.="phone number can only contain digits";
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
						redirect("contact.php?errMsg=$errors"); //this reloads the page and gets rid of the post info
					}
					//ODBC String
					$dblink=db_connect("contact_data");
					//$dblink2=db_connect("somet_other_data_base")
					$sql="Insert into `contact_info` (`first_name`,`last_name`,`email`,`phone`,`user_name`,`password`,`comments`) values
					('$firstName','$lastName','$email','$phone','$username','$password','$comments')";
					$dblink->query($sql) or
						die("Something went wrong with: $sql".$dblink->error);
					echo '<h2>Your data was successfully saved.</h2>';
				}
			 ?>
	</section>
	
</body>
< <script src="assets/js/event-listener.js"></script>  <!-- fixed js corresponding logic bug -->
</html>
