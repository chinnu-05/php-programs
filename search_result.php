<?php
session_start();

include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$skill = $_GET['skill'];

$sql = "SELECT skills.*, users.name, users.department, users.year
        FROM skills
        JOIN users ON skills.user_id = users.user_id
        WHERE skills.skill_name LIKE '%$skill%'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Search Results - SkillSwap</title>
</head>

<body>

<h2>Skill Search Results</h2>

<?php

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<h3>" . $row['skill_name'] . "</h3>";

        echo "Student Name: " . $row['name'] . "<br>";
        echo "Department: " . $row['department'] . "<br>";
        echo "Year: " . $row['year'] . "<br>";
        echo "Description: " . $row['skill_description'] . "<br><br>";

        echo '<a href="request_skill.php?skill_id='
            . $row['skill_id']
            . '&receiver_id='
            . $row['user_id']
            . '">Request Skill Exchange</a>';

        echo "<hr>";
    }

} else {

    echo "No matching skill found.";

}

?>

<br>

<a href="find.php">Search Again</a>

<br><br>

<a href="dashboard.php">Back to Dashboard</a>

</body>

</html>
