<!DOCTYPE html>
<html>
<head>
    <title>Employee Database</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("Location: login.php");
        exit;
    }
    ?>
    <h1>Employee Database</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
    <ul>
        <li><a href="view_employees.php">View Employees</a></li>
        <li><a href="view_salary_details.php">View Salary Details</a></li>
        <li><a href="view_salary_in_hand.php">View Salary In Hand</a></li>
        <li><a href="view_salary_increments.php">View Salary Increments</a></li>
        <li><a href="view_savings.php">View Savings</a></li>
        <li><a href="view_absence.php">View Absence Records</a></li>
    </ul>
</body>
</html>
