<?php 
	
	require_once 'includes/dbh.inc.php';
		$conn = mysqli_connect($hn, $un, $pw, $db);
	if(isset($_GET["delete"])){
		$delete=$_GET["delete"];
		$sql = "DELETE FROM books WHERE image='$delete'";
		$result = mysqli_query($conn, $sql);
		header("Location: viewbook.php");

}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: url(bg1.jpg);
			background-size: cover;

			background-repeat: no-repeat;
			background-attachment: fixed;
		}

		#img_div{

			background-color: rgba(0,0,0,0.55);
			/*background-color: #ccc;*/
			color: orange;
			float: left;
			width: 420px;
			height: 198px;
			padding: 5px;
			margin: 20px auto;
			margin-right: 30px;
			margin-left: 35px;
			/*border: 0.5px solid #cbcbcb;*/
			border: 0.5px solid #cdcdcd;
			transition: 0.2s;
			
		}

		#img_div:after{
			content: "";
			display: block;
			
			clear: both;
		}

		#img_div:hover {
			cursor: pointer;
			
			transform: scale(1.07);
			border: 0.5px solid yellow;
			box-shadow: 1px 1px 2px black, 0 0 15px black, 0 0 5px black;
		}

		 img{
			/*border: 1px solid #cdcdcd;*/
			float: left;
			margin: 5px;
			padding-right: 10px;
			padding-top: 15px;
			width: 150px;
			height: 150px;
		}

		
		 .delete {
			border:none;
			outline: none;
			background: #00c3ff;
			color: #111;
			font-size: 15px;
			font-weight: 600;
			border-radius: 20px;
			float: right;
			margin-right:170px;
    		display:block;
    		
    		
    		width: 70px;
			
			


			
			

		}

		.delete a{
			text-decoration: none;
			color: black;
		}

		 .bookinfo{
			margin: 0px;
			margin-top: 20px;
			margin-bottom: 8px;
			padding: 0px;
			text-shadow: 1px 1px 2px black;
			line-height: 20px; 

		}

	</style>
</head>
<body>
	
	<div id="content">
	
		<?php 
			require_once 'includes/dbh.inc.php';
		$conn = mysqli_connect($hn, $un, $pw, $db);
	
		
			
			$sql = "SELECT * FROM books";
			$result = mysqli_query($conn, $sql);
		
			while ( $row = mysqli_fetch_array($result) )
			{
				echo "<div id='img_div' class='booksiplay'>";
					echo "<img src= 'images/".$row['image']."'>";
					echo "<p class='bookinfo'>Title: ".$row['title']."<br>";
					echo "Price: ".$row['price']."<br>";
					echo "Semester: ".$row['sem']."<br>";
					echo "Department: ".$row['dept']."<br><br>";
					echo "posted by: ".$row['u_post']."<br>";
					echo "contact: ".$row['u_contact']."</p>";
					echo '<button class="delete"><a href="?delete='.$row['image'].'">Delete</a></button>';
				echo "</div>";
			}

		?>



		
	</div>
</body>
</html>