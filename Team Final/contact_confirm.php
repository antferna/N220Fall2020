<?php
$page_title = "Elite Drives | Contact Us";
include ('includes/header.php');

$name = $email = $information = $description = "";
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST,"email",
    FILTER_SANITIZE_EMAIL);

if(filter_has_var(INPUT_POST,"information")) {
    $information = $_POST["information"];
}   else{
    $information = "No";
}

    $description = filter_input(INPUT_POST, "description",
        FILTER_SANITIZE_STRING);

}

?>

<div class="contactimg"><br><br><br><br><b>Thank you!</b></div>

<div class="confirmationtxt">Thank you for your information. We will contact you as soon as possible.<br> Have a good day!</div>



<?php
include ('includes/footer.php');
?>
