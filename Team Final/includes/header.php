<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

//variables for users login
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login']) AND isset($_SESSION['name']) AND
    isset($_SESSION['role'])){

    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="www/css/styles.css">
    <title><?php echo $page_title; ?></title>
</head>
<body>
<header>
    <nav class="navigation-bar">
        <img class="logo" src="www/img/EliteDrives_final_logo_png.png" >
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="garage.php">GARAGE</a>
        <a href="locations.php">LOCATIONS</a>
        <a href="contact.php">CONTACT US</a>
        <a href="testimonials.php">TESTIMONIALS</a>
        <a href="search.php">SEARCH</a>
        <a href="loginform.php">LOG IN</a>
        <?php
        if (empty($login))
            echo " ";
        else {
            echo "<a href ='logout.php'>LOGOUT</a>";
            echo "<span style='color:red; margin-left: 30px'>Welcome $name!</span>";
        }
        ?>
    </nav>
</header>

