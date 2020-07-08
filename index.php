<!DOCTYPE html>
<html>
<head>
<title>Database Record</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>

<?php
$servername = "mysql-container";
$username = "root";
$password = "helloworld";
$database = "coredb";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * FROM people ORDER BY RAND() LIMIT 1;");

echo "<table border='1'>
<tr>
<th>Full Name</th>
<th>Phone Number</th>
<th>City</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['full_name'] . "</td>";
echo "<td>" . $row['phone_number'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html>
