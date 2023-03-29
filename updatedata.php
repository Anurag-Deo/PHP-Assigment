<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->

	<div class="main-w3layouts wrapper" style="height:90vh">
		<h1>Update Profile</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="sendtodatabase.php" method="post">
					<input class="text email" type="email" disabled name="email_new" placeholder="<?php echo $_SESSION['email']?>" required="" >
					<input class="text" type="text" name="first_name_new"  required="" placeholder="First Name">
					<input class="text last_name" type="text" name="last_name_new"  placeholder="Last Name">
					<input class="text" type="password" name="password_new"  required="" placeholder="Password">
                    
					<input type="submit" value="EDIT">
				</form>
                <form action="logout.php" method="post">
                    <input type="submit" value="LOGOUT">
                </form>
                <form action="deleteAccount.php" method="post">
                    <input type="submit" value="DELETE ACCOUNT">
                </form>
				<!-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> -->
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>