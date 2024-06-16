<?php
			echo '<div class="collapse navbar-collapse">';
                    echo '<ul class="nav navbar-nav navbar-nav-first">';
					if (!isset($_GET['page']))
						$page="home";
					else
						$page=$_GET['page'];
					if ($page=="home") 
                        echo ' <li class = active><a href="index.php?page=home#feature" class="smoothScroll">Home</a></li>';
					else
						echo '  <li><a href="index.php?page=home#feature" class="smoothScroll">Home</a></li>';
					if ($page=="contact")
						echo '<li class = active><a href="index.php?page=contact" class="smoothScroll">Contact</a></li>';	
					else 
						echo '<li><a href="index.php?page=contact" class="smoothScroll">Contact</a></li>';
                    echo '</ul>';
               echo '</div>';
?>