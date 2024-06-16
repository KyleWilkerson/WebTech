<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kyle's Website</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/templatemo-style.css">
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	 <div id="greeting" align="center"></div>
	 
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Kyle's website</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.html" class="smoothScroll">Home</a></li>
                         <li><a href="index.html" class="smoothScroll">School</a></li>
                         <li><a href="contact.php" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>

	<!-- HOME -->
	<section id="home">
		<?php
			if(!isset($_POST['submit']))
			{
		?>
		<form method="post" action="" id="mainForm">
			<div class="form-group" id="first_name_group">
			<label for="firstname">First Name: </label>        
			<input type="text" id="firstname" class="form-control" name="firstname" />     
			<div id="fnFeedback"></div>
			</div>
			<div class="form-group" id="last_name_group">
			<label for="lastname">Last Name: </label>        
			<input type="text" id="lastname" class="form-control" name="lastname" /> 
			<div id="lnFeedback"></div>
			</div>
			<div class="form-group" id = "email_address_group">
			<label for="email">Email Address: </label>        
			<input type="text" id="email" class="form-control" name="email"/>     
			<div id="emailFeedback"></div>
			</div>
			<div class="form-group" id="phone_number_group">
			<label for="phone" name="phone_number_group">Phone-Number: </label>        
			<input type="text" id="phone" class="form-control" name="phone" />     
			<div id="phoneFeedback"></div>
			</div>
			<div class="form-group" id = "user_name_group" name="user_name_group">
			<label for="username">Create a username: </label>        
			<input type="text" id="username" class="form-control" name="username" />     
			<div id="unFeedback"></div>
			</div>
			<div class="form-group" id = "password_group">
			<label for="password">Create a password: </label>        
			<input type="password" class="form-control" id="password" name="password" />
			<div id="pwFeedback"></div>
			</div>
			<div class="form-group" id="comments_group">
			<label for="comments">Comments: </label>        
			<textarea id="comments" class="form-control" name="comments"></textarea>  
			<div id="commentsFeedback"></div>
			</div>
			<div class="form-group">
			<input type="submit" value="sign up!" name="submit" />      
			</div>   
		</form>
			<?php
			}
			else
				{
				 	echo '<h2>Hello from results</h2>';
					 echo '<p>First Name: ' . $_POST['firstname'] . '</p>'; //superglobal arrays work all throughout the sub directory 
				
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
	
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">
                    
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 align="center">Contact Info</h2>
                              </div>
                              <address>
                                   <p align="center"><a href="mailto:kyle.wilkerson@my.utsa.edu">School email</a></p>
                              </address>
                         </div>
                    
               </div>
          </div>
     </footer>
</body>
<script src="assets/js/event-listener.js"></script> 
</html>
