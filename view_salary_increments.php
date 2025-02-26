<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include 'connect.php';

$sql = "SELECT * FROM SalaryIncrements";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Increment ID</th><th>Employee ID</th><th>Effective Date</th><th>Increment Amount</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["IncrementID"]."</td><td>".$row["EmployeeID"]."</td><td>".$row["EffectiveDate"]."</td><td>".$row["IncrementAmount"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
