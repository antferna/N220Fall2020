<?php

//include ('includes/header.php');
////include code from database.php
require ('includes/database.php');

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


//create variable login status.
$_SESSION['login_status'] = 2;
$username = $password = "";

//retrieve user name and password from the form in the login form
if (filter_has_var(INPUT_POST, 'username') || filter_has_var(INPUT_POST, 'password')) {
    $username = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)));
    $password = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
}

//Validate user name and password against a record in the users table in the database.
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
echo  $sql;
$query = @$conn->query($sql);


if ($query->num_rows){
    //It is a valid user. Need to store the user in session variables.
    $row = $query->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['role'] = $row['role'];
    $_SESSION['name'] = $row['firstname'] . " " . $row['lastname'];
    $_SESSION['login_status'] = 1;
}

//close connection
$conn->close();

//include ('includes/footer.php');
header("Location:loginform.php");


