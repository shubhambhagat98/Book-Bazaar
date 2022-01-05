<?php

session_start();


if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Unable to connect to database");

	$name =$conn->real_escape_string($_POST['username']);
	$pass =$conn->real_escape_string($_POST['password']);

	$sql    = "SELECT * FROM userdetails WHERE (username='$name' OR email='$name')  AND password='$pass'";
  	$result   = $conn->query($sql);
  	$rowcount= $result->num_rows;

  	if ($rowcount < 1) {
  		header("Location: ../index.php?login=error");
	exit();
  	} else {
  		$row = $result->fetch_array(MYSQLI_ASSOC);
  		//log in the user here
  		$_SESSION['u_first']= $row['first'];
  		$_SESSION['u_last']= $row['last'];
  		$_SESSION['u_email']= $row['email'];
  		$_SESSION['u_name']= $row['username'];   

  		header("Location: ../mainpage.php?login=success");
		exit();

  		//testing sesssion variables
  		/*echo $_SESSION['u_first']."<br>";
  		echo $_SESSION['u_last']."<br>";
  		echo $_SESSION['u_email']."<br>";
  		echo $_SESSION['u_name']."<br>";*/

  		


  		//testing whether row fectched data from table
  		//echo $row['first'];
  		//header("Location: ../demo.html?login=success");

  		
  	}
  	


} else {
	header("Location: ../index.php?login=error");
	exit();
}






?>