<?php

require_once("../model/userModel.php");

// Start session
session_start();

$error = "";

// If the user is not logged in and no "Remember Me" cookie is set, continue with the login process
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";

if ($username == "" || $password == "") {
    $error = "Null username/ password!";
} else {
    $status = login($username, $password);

    if ($status) {
        $_SESSION['flag'] = 'true';
        header('location: ../view/dashboard.php');
    } else {
        $error =  "Invalid username/password!";
    }
}
