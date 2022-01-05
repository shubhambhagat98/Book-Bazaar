<?php
 	
 	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css ">
	<script type="text/javascript">
		function loginvalidation() {
	    var x = document.getElementById("name").value;
	    var y = document.getElementById("password").value;
	    

	    if (x == "" && y == "") {
	    alert("Username/E-mail and Password must be filled...");
	    return false;
		}
	    if (x == "") {
	    alert("Username/E-mail must be filled out");
	    return false;
	    }

	    if (y == "") {
	    alert("Password must be filled out");
	    return false;
	    }
		
		} 
</script>
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><img src="assets/booklogo.png" id="logo"></li>
				<li><a href="index.php">BOOK BAZAAR - THE ONLINE BOOK STORE</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_name'])) {
						echo '<form name="logout" action="includes/logout.inc.php" method="post">
								<button type="submit" name="submit">Logout</button>
							</form>';
					}else{

						echo '<form name="login" action="includes/login.inc.php"  onsubmit="return loginvalidation()" method="post">
						<input type="text" id="name" name="username" placeholder="username/e-mail">
						<input type="password" id="password" name="password" placeholder="password">
						<button type="submit" name="submit"><span>Login</span></button>
						</form>
						<a href="signup.php">Sign-up</a>';


					}
				?>
				
			</div>
		</div>
	</nav>
</header>




<section class="main-container">
	<div class="section-div">
		<h3 class="item-1"><img src="assets/booklogo.png"><br>The Online Platform To Buy And Sell Used Books</h3>
		
		<h3 class="item-2"><img src="assets/sb2.png"><br>Post your ad and sell old books to earn some money</h3>

		<h3 class="item-3"><img src="assets/bb1.png"><br>Explore various ads on our website to buy new books</h3>
	


	</div>


</section>



</body>
</html>