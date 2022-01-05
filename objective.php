<?php
 	
 	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css ">
	<link rel="stylesheet" type="text/css" href="css/navmenu.css">



</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><img src="assets/booklogo.png" id="logo"></li>
				<li><a href="mainpage.php">BOOK BAZAAR - THE ONLINE BOOK STORE</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_name'])) {
						//echo "Welcome ".$_SESSION['u_first']." ".$_SESSION['u_last'];
						//echo '<a class="displayuser" href="#">Hello, '. $_SESSION["u_first"].'</a>';
						echo '<a class="displayuser" href="#">Hello, '. $_SESSION["u_first"]." ".$_SESSION['u_last'].'</a>';
						echo '<form name="logout" action="includes/logout.inc.php" method="post">
								<button type="submit" name="submit">Logout</button>
							</form>';
					}
				?>
				
			</div>
		</div>
	</nav>
</header>

<div  class="listbox">
	<ul id="navbar">
		<li><a>SEM 1</a>
			<ul>
				<li><a>CMPN</a></li>
				<li><a>IT</a></li>
				<li><a>EXTC</a></li>
			</ul>
		</li>
		<li><a>SEM 2</a>
			<ul>
				<li><a>CMPN</a></li>
				<li><a>IT</a></li>
				<li><a>EXTC</a></li>
			</ul>
		</li>
		<li><a>SEM 3</a>
			<ul>
				<li><a>CMPN</a></li>
				<li><a>IT</a></li>
				<li><a>EXTC</a></li>
			</ul>
		</li>
		<li><a>SEM 4</a>
			<ul>
				<li><a href="sem4_cmpn.php">CMPN</a></li>
				<li><a href="sem4_it.php">IT</a></li>
				<li><a href="sem4_extc.php">EXTC</a></li>
			</ul>	
		</li>
		<li><a>SEM 5</a>
			<ul>
				<li><a href="sem5_cmpn.php">CMPN</a></li>
				<li><a href="sem5_it.php">IT</a></li>
				<li><a href="sem5_extc.php">EXTC</a></li>
			</ul>	
		</li>
		<li><a>SEM 6</a>
			<ul>
				<li><a>CMPN</a></li>
				<li><a>IT</a></li>
				<li><a>EXTC</a></li>
			</ul>	
		</li>
		<li><a>SEM 7</a>
			<ul>
				<li><a>CMPN</a></li>
				<li><a>IT</a></li>
				<li><a>EXTC</a></li>
			</ul>	
		</li>
		<li><a>SEM 8</a>
			<ul>
				<li><a>CMPN</a></li>
				<li><a>IT</a></li>
				<li><a>EXTC</a></li>
			</ul>	
		</li>
		<li><a>YOUR BOOKS</a>
			<ul>
				<li><a href="bookupload.php">Upload Book</a></li>
				<li><a href="yourbook.php">View Books</a></li>
			</ul>	
		</li>
		<li><a>ABOUT US</a>
			<ul>
				<li><a href="objective.php">OBJECTIVE</a></li>
				<li><a href="guidelines.php">GUIDELINES</a></li>
				
			</ul>	
		</li>
	</ul>
</div>

<script type="text/javascript">
		window.onscroll= function(){myFunction()};
		var navbar = document.getElementById('navbar');
		var sticky = navbar.offsetTop;

		function myFunction() {
			if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky");
			} else {
				navbar.classList.remove("sticky");
			}
		}

		
	</script>



<section  class="main-container" style=" text-align: justify;">
	<div class="section-div" style="background: rgba(0,0,0,0.6);margin-top: 10px;  text-align: justify;font-size: 20px;width: 95%">
		<h3 >OBJECTIVE / PURPOSE OF  OUR  WEBSITE</h3><br><br><br>
		

		<p >PROBLEM FACED BY STUDENTS<br><br>
			When the new semester commences, new books are not available in market. Sometimes student find that the notes given in the college are not sufficient for writing some reasonable context in answer papers. Books become available after 1st unit test or so. Thus when the need for books is more students feel very disappointed about unvailability of books<br><br><br>


		</p>


		<p>SOLUTION PROVIDED BY OUR WEBSITE <br><br>
			All the previous semester books can be sold and students can recycle that money in order to buy current semester books. Also, students who are having financial difficulty can make the most use of this website by buying books from here which will be nearly 40-50% less than the market rate.<br><br><br>
			
		</p>
		<p>DEVELOPERS OF THE WEBSITE<br><br>
			Shubham Bhagat<br><br>
			<img src="assets/shubh.jpg" style="width: 300px;height: 300px;border-radius: 50%;"><br><br><br>
			Swapnil Gawad<br><br>
			<img src="assets/swapnil.jpg" style="width: 300px;height: 300px;border-radius: 50%;"><br><br><br><br>
			
		</p>
		
		 
	</div>


</section>



</body>
</html>