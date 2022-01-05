

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" type="text/css" href="css/signupstyle.css"> 
	<script>
      function signupvalidate(form)
      {
		fail = "";
		fail += validateFirstname(form.firstname.value);
		fail += validateLastname(form.lastname.value);
        fail += validateUsername(form.username.value);
        fail += validatePassword(form.password.value);
        fail += validateTelephone(form.telephone.value);
        fail += validateEmail(form.email.value);
        if   (fail == "")   
			return true;
        else 
		{ 
			alert(fail); 
			return false; 
		}
      }

      function validateFirstname(field)
      {
        if (field == "") 
		  return "No Firstname was entered.\n";
        else 
          return "";
      }

      function validateLastname(field)
      {
        if (field == "") 
		  return "No Lastname was entered.\n";
        else 
          return "";
      }

      function validateTelephone(field)
      {
        if (field == "") 
		  return "No Contact number was entered.\n";
        else if (/[^0-9]/.test(field))
          return "Only digits allowed in contact number\n";
      	else if (field.length < 10)
          return "Pls enter valid contact number\n";
        return "";
      }

      function validateUsername(field)
      {
        if (field == "") 
		  return "No Username was entered.\n";
        else if (field.length < 5)
          return "Usernames must be at least 5 characters.\n";
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n";
        return "";
      }
	  
	  function validateEmail(field)
      {
		var  count1 = 0, count2 = 0;
	    for(var i=0;i<field.length;i++)
			{ 
       if(field.charAt(i)=='@')
				count1++;

       if (field.charAt(i)=='.') 
        count2++;
			}

        if (field == "") 
			     return "No Email was entered.\n";
		    else if (/[^a-zA-Z0-9.@_-]/.test(field))
            return "Only a-z, A-Z, 0-9, - , . and  _ allowed in email address.\n";
        else if ((field.indexOf(".") == 0) || (field.indexOf("@") == 0) || (field.indexOf("-") == 0) || (field.indexOf("_") == 0) )
			      return "symbol . - _ @ cannot be the first character in email.";
		    else if (count1!=1 || count2<1)
			      return "@ symbol allowed only once in email and . should be given atleast once in email.";
		    else
		        return "";
      }

      function validatePassword(field)
      {
        if (field == "") 
		  return "No Password was entered.\n";
        else if (field.length < 6)
          return "Passwords must be at least 6 characters.\n";
        else if (! /[a-z]/.test(field) ||  ! /[A-Z]/.test(field) || ! /[0-9]/.test(field))
          return "Passwords require one each of a-z, A-Z and 0-9.\n";
		else
          return "";
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
	<div class= "loginbox">
		<h1 style="margin: 20px; padding:20px 0 30px; text-align: center;">Sign-up</h1>
		<form name="signup" action="includes/signup.inc.php" onsubmit="return signupvalidate(this)" method="post">
			<label name="right">Firstname  <input type="text"  name="firstname" placeholder="Enter Firstname"></label>
			<label name="left">Lastname  <input type="text"  name="lastname" placeholder="Enter Lastname "></label><br>

			<label name="right1">Username  <input type="text"  name="username" placeholder="Enter Username"></label>
			<label name="left1">Password  <input type="password"  name="password" placeholder="Enter Password"></label><br>

			
			<label name="right2">Telephone  <input type="text"  name="telephone" placeholder="Enter Contact number"></label>
			<label name="left2">E-mail Id    <input type="text"  name="email" placeholder="Enter Email "></label><br><br><br>
			
			<input type="submit" name="submit" value="Sign-up"><br>

		</form>

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
	</div>


</section>



</body>
</html>