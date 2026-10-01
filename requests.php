<?php
session_start();

include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT requests.*, 
               users.name,
               skills.skill_name
        FROM requests
        JOIN users ON requests.sender_id = users.user_id
        JOIN skills ON requests.skill_id = skills.skill_id
        WHERE requests.receiver_id = '$user_id'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Skill Exchange Requests</title>
</head>

<body>

<h2>Skill Exchange Requests</h2>

<?php

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<h3>Skill: " . $row['skill_name'] . "</h3>";

        echo "Requested By: " . $row['name'] . "<br>";

        echo "Status: " . $row['status'] . "<br><br>";

        if ($row['status'] == 'Pending') {

            echo '<a href="update_request.php?id='
                . $row['request_id']
                . '&status=Accepted">Accept</a>';

            echo " &nbsp; ";

            echo '<a href="update_request.php?id='
                . $row['request_id']
                . '&status=Rejected">Reject</a>';
        }

        echo "<hr>";
    }

} else {

    echo "No skill exchange requests found.";

}

?>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</body>

</html>
