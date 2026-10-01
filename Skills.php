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
    <title>Add Skill - SkillSwap</title>
</head>

<body>

<h2>Add Your Skill</h2>

<form action="save_skill.php" method="POST">

    Skill Name:
    <br>
    <input type="text" name="skill_name" required>

    <br><br>

    Skill Description:
    <br>
    <textarea name="skill_description" rows="5" cols="40"
    placeholder="Example: I can teach basic Python programming"></textarea>

    <br><br>

    <button type="submit">Add Skill</button>

</form>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>
