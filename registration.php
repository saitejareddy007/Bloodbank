<?php
    include('database.php');

    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $fullName       = $_POST['fullName'];
    $bloodGroup     = $_POST['bloodGroup'];
    $age            = $_POST['age'];
    $sex            = $_POST['sex'];
    $mobileNumber   = $_POST['mobileNumber'];
    $address        = $_POST['address'];
    
    $res=mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
    
    if(mysqli_num_rows($res)==0){
        $result=mysqli_query($con,"INSERT INTO user (username,password,Name,blood_group,age,sex,contact_no,address) VALUES ('$username','$password','$fullName','$bloodGroup','$age','$sex','$mobileNumber','$address')");
        
        if(!$result){
            echo("Error description: " . mysqli_error($con));
        }
        else{
?>            
            <script>
    alert('you account has been created successfully');
    window.location="/Bloodbank/"
</script>
<?php
            
        }    
    }
    else{
?>
<script>
    alert('The username you have choosen is not available');
    window.location="/Bloodbank/createAccount.html"
</script>
<?php
    }
?>