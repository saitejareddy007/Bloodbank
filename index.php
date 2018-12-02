<?php
	include('login.php');
	if(isset($_SESSION['username'])){
		include 'home.php';
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js" ></script>
</head>
<body>
	<div id="top">
		<div class="img" ><img src="logo.jpeg" height="40px"></div>
		<div class="Name" ><h1 style="color:white; top:10px;">Blood Bank</h1></div>
	</div>
	<div id="bottom">
		<div id="right_login" >
			<div id="loginForm">
				<form name="loginForm" action="login.php" method="post" onsubmit="return validateform()">
					<table>
						<tr>
							<p style="font-size: 40px;">Log In Here</p>
						</tr>
						<tr>
							<td>Username</td>
							<td>Password</td>
						</tr>
						<tr>
							<td><input type="text" name="username"></td>
							<td><input type="Password" name="password"></td>
						</tr>
						<tr>
							<td><button type="submit" value="submit" >LogIn</button></td>
							<td><a href="#">Forgot password</a></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="signup" method="post">
				New User? <a href="createAccount.html">Register Here</a>
			</div>	
		</div>
		<div id="left">
			<img src="Image.jpg" height="100%" width="80%" style="border-radius:5px;">
		</div>
	</div>
	
</body>
</html>
<?php
}
?>