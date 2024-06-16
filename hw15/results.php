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
                         <li><a href="contact.html" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>

	<!-- HOME -->
	<section id="home">
		<div style="margin:20px;padding:20px">
			<?php
				if (isset($_POST['submit']))
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
				else 
				{
					header("Location: contact.html");
				}
			 ?>
		</div>
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
