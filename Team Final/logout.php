<?php
$page_title = "Elite Drives Logout";
include ('includes/header.php');
//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_stat();
}


//unset all the registered variables
$_SESSION = array();


//delete the session cookies
setcookie(session_name(), "", time() - 3600);

//destory the session
session_destroy();
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>Logout</h2>
<p>Thank you for your visit. You are now logged out</p>

<?php
include ('includes/footer.php');
?>

