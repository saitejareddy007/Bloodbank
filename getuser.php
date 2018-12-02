<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-color:#E0EDF4;
    border-width:0px;
    border-style:Inset;
    width:100%;
    border-spacing:1px;
    border-collapse: collapse;
}

table, td, th {
    border:0px solid black;
    
}


</style>
</head>
<body>

<?php
$q = $_GET['q'];

include('database.php');

$result = mysqli_query($con,"SELECT * FROM user WHERE blood_group = '".$q."'");
$colorIndicator = True;
echo "<table style='overflow-y:scroll;'>";
while($row = mysqli_fetch_array($result)) {
    $colorIndicator = !$colorIndicator;
    if($colorIndicator){
        echo "<tr style = 'background-color:#FC5353; height:40px;color:white;'>";
        echo "<td style='width:40%;' >" . $row['Name'] . "</td>";
        echo "<td style='width:10%;' >" . $row['age'] . "</td>";
        echo "<td style='width:20%;' >" . $row['sex'] . "</td>";
        echo "<td style='width:30%;' >" . $row['contact_no'] . "</td>";
        echo "</tr>";
    }else{
        echo "<tr style = 'background-color:white; height:40px;'>";
        echo "<td style='width:40%;' >" . $row['Name'] . "</td>";
        echo "<td style='width:10%;' >" . $row['age'] . "</td>";
        echo "<td style='width:20%;' >" . $row['sex'] . "</td>";
        echo "<td style='width:30%;' >" . $row['contact_no'] . "</td>";
        echo "</tr>";
    }
    
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
