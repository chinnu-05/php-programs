<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Find a Skill</title>
</head>

<body>

<h2>Find a Skill</h2>

<form action="search_result.php" method="GET">

    Enter Skill:
    <br><br>

    <input type="text" name="skill" placeholder="Example: Python" required>

    <br><br>

    <button type="submit">Search</button>

</form>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>
