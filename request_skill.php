<?php
session_start();

include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$sender_id = $_SESSION['user_id'];
$receiver_id = $_GET['receiver_id'];
$skill_id = $_GET['skill_id'];

$sql = "INSERT INTO requests
        (sender_id, receiver_id, skill_id, status)
        VALUES
        ('$sender_id', '$receiver_id', '$skill_id', 'Pending')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Skill Exchange Request Sent!</h2>";
    echo "<p>Your request has been sent successfully.</p>";
    echo "<br>";
    echo '<a href="dashboard.php">Back to Dashboard</a>';
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
