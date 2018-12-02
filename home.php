<?php
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
<body style="overflow-y: scroll;">
    <style>
    table {
    border-color:#E0EDF4;
    border-width:0px;
    border-style:Inset;
    width:100%;
    border-spacing:1px;
    border-collapse: collapse;
}

    th {text-align: center;}
</style>
	<div id="top" style="margin-bottom: 20px; position: relative; display: inline-block;">
		<div class="img" ><img src="logo.jpeg" height="40px"></div>
		<div class="Name" ><h1 style="color:white; top:10px;">Blood Bank</h1></div>
		<div class="logoutbtn">
			<form action="logout.php" method="post">
				<button type="submit" style="padding: 30px;"><b>Logout</b></button>
			</form>
		</div>
		<div style="float: right; height:80px;display: flex;"><p style="margin: auto; color: white;"><?php echo $_SESSION['username']; ?></p></div>
	</div>
	<div id="homeg" style="height: 1px;">
	
	</div>
	<div id="home">
		<div style="height: 140px; width: 100%;">
			<h1 style="margin:0 auto; color: #FC5353;">Search for donor form here</>
			<select  style="width: 50%; font-size: 18px; text-align: center; height:40px;padding: 5px; margin-bottom: 10px; color: red" name="bloodGroup" onchange="showUser(this.value)">
								<option value="">Select a Blood-Group</option>
								<option value="O -ve" >O -ve</option>
								<option value="O +ve" >O +ve</option>
								<option value="A -ve" >A -ve</option>
								<option value="A +ve" >A +ve</option>
					            <option value="B -ve" >A -ve</option>
								<option value="B +ve" >A +ve</option>
								<option value="AB -ve" >A -ve</option>
								<option value="AB +ve" >A +ve</option>
							</select>
			<table >
		        <tr style='color:white;background-color:#999999;'>
		            <th style="font-size: 20px; width:40%;" >Name</th>
		            <th style="font-size: 20px; width:10%;" >Age</th>
		            <th style="font-size: 20px; width:20%;" >Sex</th>
		            <th style="font-size: 20px; width:30%;" >Phone number</th>
		        </tr>
			</table>
		</div>
		<div id="donorSearch" style="visibility: hidde;">

			<div id="txtHint">
				<p><b>Donors info will be listed here...</b></p>
			</div>
		</div>
	</div>
</body>
</html>
