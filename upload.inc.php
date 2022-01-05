<?php
 	
 	session_start();

 	if (isset($_POST['upload'])){
		
		//create uniq number to concatenate with filename
		$filenamenew = uniqid('',true).basename($_FILES['image']['name']);
 		$target="images/".$filenamenew;

 		require_once 'includes/dbh.inc.php';
		$conn = mysqli_connect($hn, $un, $pw, $db);

		$postedby=$_SESSION['u_first']." ".$_SESSION['u_last'];

		//$image = $_FILES['image']['name'];
		$image = $filenamenew;
		$title = mysqli_real_escape_string($conn, $_POST['booktitle']);
		$price = mysqli_real_escape_string($conn, $_POST['bookprice']);
		$sem = mysqli_real_escape_string($conn, $_POST['semester']);
		$dept = mysqli_real_escape_string($conn, $_POST['department']);
		$u_post = mysqli_real_escape_string($conn, $postedby);
		$u_contact = mysqli_real_escape_string($conn, $_SESSION['u_email']);


		$sql = "INSERT INTO books (image, title, price, sem, dept, u_post, u_contact) VALUES ('$image','$title','$price','$sem','$dept','$u_post','$u_contact')  ";
		$result = mysqli_query($conn, $sql);


		if ($result) {
			
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			
			//$msg="image upload successfull";
			/*echo "<script>
					alert('book uploaded successfully');
					window.location.href='bookupload.php';
				</script>";*/
			header("Location: bookupload.php?UPLOAD=SUCCESS");


		}else{
			//echo "there was some problem uploading the image";
			//echo "<script>alert('there was some problem ! pls try again')</script>";
			echo "<script>
					alert('there was some problem ! pls try again');
					window.location.href='bookupload.php';
				</script>";

		}
		}else{
			echo "insertion unsuccessfull";
		}

		







	}	




?>

