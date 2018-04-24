<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

include('database.php');

$result = mysqli_query($con,"SELECT * FROM user WHERE blood_group = '".$q."'");

echo "<table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Phone number</th>
        </tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['sex'] . "</td>";
    echo "<td>" . $row['contact_no'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
