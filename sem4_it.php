<?php
 	
 	session_start();




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css ">
	<link rel="stylesheet" type="text/css" href="css/navmenu.css">
	<link rel="stylesheet" type="text/css" href="css/bookdisplay.css">


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
		<li><a class="active">SEM 4</a>
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



<section >
	<div id="content">
	
		<?php 
			require_once 'includes/dbh.inc.php';
		$conn = mysqli_connect($hn, $un, $pw, $db);
	
		
			$sql = "SELECT * FROM books where sem='4' and dept='IT'";
			$result = mysqli_query($conn, $sql);
		
			while ( $row = mysqli_fetch_array($result) )
			{
				echo "<div id='img_div' class='booksiplay'>";
					echo "<img class='bookimage' src= 'images/".$row['image']."'>";
					echo "<p class='bookinfo'>Title: ".$row['title']."<br>";
					echo "Price: ".$row['price']."<br>";
					echo "Semester: ".$row['sem']."<br>";
					echo "Department: ".$row['dept']."<br><br>";
					echo "posted by: ".$row['u_post']."<br>";
					echo "contact: ".$row['u_contact']."</p>";
				echo "</div>";
			}

		?>
	</div>


</section>	
</body>
</html>