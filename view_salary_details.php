<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include 'connect.php';

$sql = "SELECT * FROM SalaryDetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Salary ID</th><th>Employee ID</th><th>Current Salary</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["SalaryID"]."</td><td>".$row["EmployeeID"]."</td><td>".$row["CurrentSalary"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
