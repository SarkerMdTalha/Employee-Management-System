<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include 'connect.php'; // Include your database connection

$sql = "SELECT * FROM Employees"; // SQL query to fetch all data from Employees
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Designation</th><th>Experience</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["EmployeeID"]."</td><td>".$row["Name"]."</td><td>".$row["Designation"]."</td><td>".$row["Experience"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
