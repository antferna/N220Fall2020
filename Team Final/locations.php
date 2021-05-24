<?php

$page_title = "Elite Drives | Locations";

include ('includes/header.php');
require_once('includes/database.php');

//select statement
$sql = "SELECT * FROM locations";
$query = $conn->query($sql);
//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    require_once('includes/footer.php');
    exit;
}

?>

<div class="locationimg"> <br><br><br><br><b>Locations</b></div>
<br>
<br>


<table id="locationlist" class="locationlist">
    <tr>
        <th>Location Image</th>
        <th>Location</th>
        <th>Description</th>
        <th>Shopping Cart</th>
    </tr>
    <?php
    //Here I am retrieving the information from the location table and putting it into a table.
    while ($row = $query->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='col1'><a href='locationdetails.php?id=", $row['location_id'], "'><img src='", $row['location_image'],"'></a></td>";
        echo "<td class='col2'><a href='locationdetails.php?id=", $row['location_id'], "'>", $row['location'], "</a></td>";
        echo "<td class='col3'>", $row['location_description'], "</td>";
        echo "</tr>";
    }

    ?>
</table>

<div class="garagespace">
    <br>
    <hr style="margin: 0 auto" width="30%">
</div>


<?php
$query->close();

$conn->close();
include ('includes/footer.php');
?>
