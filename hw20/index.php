<?php
	include("functions.php");
?>
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
			  <?php 
			  	include("navigation.php");
			  ?>

          </div>
     </section>

<?php
	if (!isset($_GET['page'])) //check to see if page is not set 
		$page="home";//if not set, init $page to home string
	else
		$page=$_GET['page'];//else grab page data and store in $page var
	switch($page) {
		case "contact":
			include("contact.php");
			break;
		case "results":
			include("results.php");
			break;
		case "login":
			include("login.php");
			break;
		case "register":
			include("register.php");
			break;
		default:
			include("home.php");
			break;
	};
?>

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
</html>
<script src="assets/js/add-content.js"></script> 
