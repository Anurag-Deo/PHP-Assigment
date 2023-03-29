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
		<h1>Profile Page</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="updatedata.php" method="post">
					<input class="text email" type="email" disabled name="email" placeholder="Email" required="" value="<?php echo $_SESSION['email']; ?>" >
					<input class="text" type="text" name="first_name" disabled placeholder="First Name" required="" value="<?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?>">
					<!-- <input class="text last_name" type="text" name="last_name" disabled placeholder="Last Name" required="" value="<?php echo $_SESSION['last_name']; ?>"> -->
					<!-- <input class="text" type="password" name="password" placeholder="Password" required="" value="<?php echo $_SESSION['password']; ?>"> -->
                    
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