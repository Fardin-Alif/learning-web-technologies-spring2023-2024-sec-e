<?php

    require_once("../controller/loginCheck.php");

?>

<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <table border="1" cellspacing="0" width=100%>
        <tr>
            <td colspan="2">
                <form method="POST" action="" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="<?= $username ?>" /> <br>
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="<?= $password ?>" /> <br>
                        <p style="color: red;"><b><?= $error ?></b></p>
                        <!-- <hr>
                        <input type="checkbox" name="remember_me" value='true'>
                        <label for="checkbox">Remember Me</label> -->
                        <!-- <br> -->
                        <!-- <br> -->
                        <input type="submit" name="submit" value="Submit" />
                        <!-- <a href="forgetPassword.php">Forget Password?</a> -->
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <p>Copyright © 2024</p>
            </td>
        </tr>
    </table>
</body>

</html>