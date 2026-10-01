<?php

include("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];
$year = $_POST['year'];

$sql = "INSERT INTO users
(name,email,password,department,year)
VALUES
('$name','$email','$password','$department','$year')";

if(mysqli_query($conn,$sql))
{
    echo "Registration Successful!";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>
