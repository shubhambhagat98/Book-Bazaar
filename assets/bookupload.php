<?php
 	
 	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css ">
	<link rel="stylesheet" type="text/css" href="navmenu.css">
	<link rel="stylesheet" type="text/css" href="upload.css">


	<script type="text/javascript">
		function fileValidation()
		{
		    var fileInput = document.getElementById('file');
		    var filePath = fileInput.value;
		    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		    if(!allowedExtensions.exec(filePath)){
		        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
		        fileInput.value = '';
		        return false;
		    }else{
		        //Image preview
		        if (fileInput.files && fileInput.files[0]) {
		            var reader = new FileReader();
		            reader.onload = function(e) {
		                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
		            };
		            reader.readAsDataURL(fileInput.files[0]);
		        }
		    }
		}

		
		function bookvalidation() 
		{
		    var bt = document.getElementById("booktitle").value;
		    var bp = document.getElementById("bookprice").value;
		    var sem = document.getElementById("semester").value;
		    var dept = document.getElementById("department").value;
		    var b_image = document.getElementById('file').value;
		    
		    if (b_image == "") {
		    	alert("please select an image to upload !!");
		    	return false;
		    }else if (bt == "" || bp == "" || sem == "" || dept == "")
		    {
		    alert("Please make sure that you fill all the book details !!");
		    return false;
			}else if (/[^0-9]/.test(bp)) {
				alert("book price should be only in digits")
				return false;
			}else if (/[^0-9]/.test(sem)) {
				alert("semester should be only in digits")
				return false;
			}else if (sem > 8) {
				alert("value of semester should be between 1-8")
				return false;
			}else if (dept != "CMPN" && dept != "EXTC" && dept !="IT") {
				alert("department should be one of the following: \n 1. CMPN \n 2. EXTC \n 3. IT\n \n And case sensitive !!")
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

<div class="listbox">
	<ul>
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
		<li><a class="active">YOUR BOOKS</a>
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



<section >
	<div class="uploadbox">
		<h1 style="margin-bottom:10px; padding:0px; font-size: 30px; text-align: center;">Upload Book</h1>

		<form method="post" action="upload.inc.php" enctype="multipart/form-data" onsubmit="return bookvalidation()" autocomplete="off">
			<p>select image</p>
			<input type="file" id="file" name="image" onchange="return fileValidation()">
			<div id="imagePreview"></div>

			<p>book title</p>
			<input type="text" id="booktitle" name="booktitle" placeholder="Enter booktitle">
			<p>book price</p>
			<input type="text" id="bookprice" name="bookprice" placeholder="Enter bookprice in digits eg. 250"><br>

			<p>semester</p>
			<input type="text" id="semester" name="semester" placeholder="Enter semester between 1 to 8"><br>

			<p>department</p>
			<input type="text" id="department" name="department" placeholder="Enter department name"><br>

			<input type="submit" name="upload" value="upload book">
			
		</form>
	</div>


</section>



</body>
</html>