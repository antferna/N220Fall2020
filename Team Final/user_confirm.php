<?php
$page_title = "Elite Drives | Confirm New User";

include ('includes/header.php');
require_once('includes/database.php');


$firstname = "";
$lastname = "";
$username = "";
$password = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_STRING);

    $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_STRING);

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);

    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
}


$role = 2; //regular user

//define the MySQL insert statement
$sql = "INSERT INTO users VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$role')";

//execute the query
$query = @$conn->query($sql);
//$query = @$conn->query($sql);
//handle error
if(!$query){
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Insertion failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    include 'includes/footer.php';
    exit;
}

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
//create session variables
$_SESSION['login'] = $username;
$_SESSION['name'] = "$firstname $lastname";
$_SESSION['role'] = 2;

//set login status to 3 since this a new user
$_SESSION['login_status'] = 3;

$conn->close();

?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Confirmation</title>
    <style type="text/css">

        td.leftcol {
            width: 120px;
            text-align: right;
            font-weight: 600;

        }

    </style>
</head>

<body style="padding-left: 50px">
<h2>Registration Confirmation Page</h2>

<p>Thank you for your registration. Below is what you submitted.</p>
<table width='550' border='2' cellspacing='0' cellpadding='5' rules='none' frame='box'>
    <tr>
        <td class='leftcol'>First Name:</td>
        <td> <?php echo $firstname ?> </td>
    </tr>
    <tr>
        <td class='leftcol'>Last Name:</td>
        <td> <?php echo $lastname ?> </td>
    </tr>
    <tr>
        <td class='leftcol'>Username:</td>
        <td> <?php echo $username ?> </td>
    </tr>
    <tr>
        <td class='leftcol'>Password:</td>
        <td> <?php echo $password ?> </td>
    </tr>

</table>
</body>
</html>
