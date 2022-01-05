<?php
 	
 	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css ">
	<link rel="stylesheet" type="text/css" href="navmenu.css">



</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><img src="booklogo.png" id="logo"></li>
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
				<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdwPLlsVQNIwMoQq0DWH3jddDoUQf8Ej-dMQIxfsS3B_Ixe7A/viewform" target="_blank">FEEBACK</a></li>
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



<section class="main-container" >
	<div class="section-div" style="background: rgba(0,0,0,0.6);margin-top: 10px;width: 95%;padding: 10px;">
		<h3 >USER-GUIDELINES</h3><br><br><br>
		

		<p >1.NAVIGATION<br><br>
			>>You can navigate and browse different books using the navigation bar provided.<br>
			>>Books are sorted according to semester and each semester has three departments namely:<br>
			1.CMPN<br>2.IT<br>3.EXTC<br><br><br>


		</p>


		<p>2.UPLOAD YOUR BOOK <br><br>
			>>Select an image which has size less then 1.5 MB.<br>
			>>Make sure that price and semester is filled with digits only.<br>
			>>The value of semester should be between 1 to 8.<br>
			>>Department name should be one of the following and case sensitive.<br>
			1.CMPN<br>2.EXTC<br>3.IT<br><br><br>
			
		</p>
		<p>3.VIEW AND DELETE YOUR BOOKS.<br><br>
			>>In this section, you can view your books as well as delete your books.<br>
			>>Be carefull while deleting your book, because the deletion cannot be undone!<br><br><br>
			
		</p>
		
		 
	</div>


</section>



</body>
</html>