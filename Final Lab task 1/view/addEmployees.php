<?php
    require_once("../controller/addEmployeesCheck.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>ADD EMPLOYEE</legend>
        <label for="employeeName">Employee Name:</label>
        <input type="text" name="name"><br>
        <br>
        <label for="contact">Contact Number:</label>
        <input type="text" name="contact"><br>
        <br>
        <label for="username">Username:</label>
        <input type="text" name="username"><br>
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password"><br>
        <p style="color: red;"><b><?= $error ?></b></p>
        <hr>
        <input type="submit" value="Add">
    </fieldset>
</form>
</body>
</html>