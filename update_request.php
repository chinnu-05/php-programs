<?php
session_start();

include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$request_id = $_GET['id'];
$status = $_GET['status'];

if ($status != 'Accepted' && $status != 'Rejected') {
    die("Invalid request status.");
}

$sql = "UPDATE requests
        SET status='$status'
        WHERE request_id='$request_id'
        AND receiver_id='" . $_SESSION['user_id'] . "'";

if (mysqli_query($conn, $sql)) {

    echo "<h2>Request Updated Successfully!</h2>";

    echo "<p>Request status: <b>$status</b></p>";

    echo '<br><a href="requests.php">Back to Requests</a>';

} else {

    echo "Error: " . mysqli_error($conn);
}
?>
