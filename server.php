<?php
session_start();

// Initializing variables
$username = "";
$email = "";
$errors = array();

// Connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// Register User
if (isset($_POST['reg_user'])) {
    // Receive all input values from form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: to ensure that the form is correctly filled...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {array_push($errors, "Username is required");}
    if (empty($email)) {array_push($errors, "E-mail is required");}
    if (empty($password_1)) {array_push($errors, "Password is required");}
    if (empty($username_1 !=$password_2) {
        array_push($errors, "The two password do not match");
    }
}