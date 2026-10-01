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
    <title>SkillSwap Dashboard</title>
</head>

<body>

<h1>Welcome to SkillSwap!</h1>

<h2>College Skill Exchange Platform</h2>

<p>What would you like to do?</p>

<a href="profile.php">My Profile</a>
<br><br>

<a href="add_skill.php">Add My Skill</a>
<br><br>

<a href="search_skill.php">Find a Skill</a>
<br><br>

<a href="logout.php">Logout</a>

</body>
</html>
