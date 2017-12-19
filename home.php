<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: /Bloodbank');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="script.js" ></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {text-align: center;}
</style>
	<div id="top">
		<div class="img" ><img src="logo.jpg" height="40px"></div>
		<div class="Name" ><h1 style="color:white; top:10px;">Blood Bank</h1></div>
		<div class="logoutbtn">
			<form action="logout.php" method="post">
				<button type="submit">Logout</button>
			</form>
		</div>
	</div>
	<div id="home">
		<h1 >Welcome <?php echo $_SESSION['username']; ?></h1>
		<button onclick="fun()" >Search for donor</button>
		
		<div id="donorSearch" style="visibility: hidden;">
			Blood Group:<select name="bloodGroup" onchange="showUser(this.value)">
							<option value="" >Select</option>
							<option value="O -ve" >O -ve</option>
							<option value="O +ve" >O +ve</option>
							<option value="A -ve" >A -ve</option>
							<option value="A +ve" >A +ve</option>
				            <option value="B -ve" >A -ve</option>
							<option value="B +ve" >A +ve</option>
							<option value="AB -ve" >A -ve</option>
							<option value="AB +ve" >A +ve</option>
						</select>
			<div id="txtHint"><b>Person info will be listed here...</b></div>			
		</div>
	</div>
</body>
</html>
