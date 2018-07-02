<?php     
    include('database.php');
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$username =$_POST['username'];
		$result = mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
		
		$row = $result->fetch_assoc();

		if(isset($_POST['username'])&&isset($_POST['password'])){
			
			if($_POST['password']==$row['password']){
		        $_SESSION['username'] = $username;
				header('Location: /Bloodbank');
			}
			else{
				?>			
	<script>
				alert("Entered email or password is incorrect");
				window.location="/Bloodbank";
	</script>
				<?php
			}	
		}
	}
 ?>