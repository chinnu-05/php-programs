<!DOCTYPE html>
<html>
<head>
    <title>SkillSwap Registration</title>
</head>
<body>

<h2>Student Registration</h2>

<form action="save_user.php" method="POST">

    Name:<br>
    <input type="text" name="name" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    Department:<br>
    <input type="text" name="department" required><br><br>

    Year:<br>
    <input type="number" name="year" required><br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>
