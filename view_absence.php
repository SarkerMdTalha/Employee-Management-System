<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
include 'connect.php';

$sql = "SELECT * FROM Absence";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Absence ID</th><th>Employee ID</th><th>Absence Start Date</th><th>Absence End Date</th><th>Total Days Absent</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["AbsenceID"]."</td><td>".$row["EmployeeID"]."</td><td>".$row["AbsenceStartDate"]."</td><td>".$row["AbsenceEndDate"]."</td><td>".$row["TotalDaysAbsent"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
