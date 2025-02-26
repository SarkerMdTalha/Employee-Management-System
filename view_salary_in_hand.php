<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include 'connect.php';

$sql = "SELECT * FROM SalaryInHand";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Salary In Hand ID</th><th>Employee ID</th><th>Net Salary</th><th>Tax Deduction</th><th>Fund</th><th>Other Deductions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["SalaryInHandID"]."</td><td>".$row["EmployeeID"]."</td><td>".$row["NetSalary"]."</td><td>".$row["TaxDeduction"]."</td><td>".$row["Fund"]."</td><td>".$row["OtherDeductions"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
