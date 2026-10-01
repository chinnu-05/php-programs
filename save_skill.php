<?php
session_start();

include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_SESSION['user_id'];
    $skill_name = $_POST['skill_name'];
    $skill_description = $_POST['skill_description'];

    $sql = "INSERT INTO skills
            (user_id, skill_name, skill_description)
            VALUES
            ('$user_id', '$skill_name', '$skill_description')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added Successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    echo "Please use the Add Skill form.";
}
?>save_skill
