<?php

require_once("../model/userModel.php");

// Start session
session_start();

$error = "";

// If the user is not logged in and no "Remember Me" cookie is set, continue with the login process
$employeeName = isset($_REQUEST['employeeName']) ? $_REQUEST['employeeName'] : "";
$contact = isset($_REQUEST['contact']) ? $_REQUEST['contact'] : "";
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";

if (isset($_POST["submit"])) {
    if ($employeeName == "" || $contact == "" || $username == "" || $password == "") {
        $error = "All fields are required.";
    } else {
        $status = addUser($employeeName, $contact, $username, $password);

        if ($status) {
            // echo "New employee added.";
            header('location: ../view/addEmployees.php');
        } else {
            $error =  "Someting went wrong!";
        }
    }
}
