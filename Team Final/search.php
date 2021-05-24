<?php

$page_title = "Elite Drives | Search";

include ('includes/header.php');


?>

<div class="searchimg"><br><br><br><br><b>Search car by Make</b></div>

<div class="searchtxt">
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <form style="margin: 0 auto; justify-content: center; text-align: center;" action="searchcarresults.php" method="get">
        <input style="height: 30px; text-align: center;" placeholder="What are you looking for?" type="text" name="terms" size="60" required />&nbsp;&nbsp;<br><br>
        <input class="button" type="submit" name="Submit" id="Submit" value="Search Cars" />
    </form>
</div>


<?php
include ('includes/footer.php');
