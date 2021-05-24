<?php
/** Author: your name
 *  Date: today's date
 *  Description: briefly describe this script file
 */
$page_title = "Elite Drives | Garage";
include ('includes/header.php');
require_once('includes/database.php');

//select statement
$sql = "SELECT * FROM cardetails";
//execute the query
$query = $conn->query($sql);
//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    require_once ('includes/footer.php');
    exit;
}
?>

    <div class="garageimg"> <br><br><br><br><b>Elite Drive's garage</b></div>
<br>
    <br>

<!--<h2 class="garagesubtitle">Elite Drive's garage</h2>-->
<table id="garagelist" class="garagelist">
<!--	<tr>-->
<!--        <th>Image</th>-->
<!--        <th class="col2">Make </th>-->
<!--        <th class="col3">Car Type</th>-->
<!--        <th class="col4">Trip Price</th>-->
<!--        <th class="col5"> Shopping cart</th>-->
<!--	</tr>-->

    <?php


        while ($row = $query->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='col1'><a href='cardetails.php?id=", $row['car_id'], "'><img src='", $row['image'],"'></a></td>";
            echo "<td class='col2'><a href='cardetails.php?id=", $row['car_id'], "'>", $row['make'], "</a></td>";
            echo "<td class='col3'>", $row['car_type'], "</td>";
            echo "<td class='col4'>", $row['trip_price'], "</td>";

            echo "</tr>";
        }

    ?>
</table>

<div class="garagespace">
    <br>
   <hr style="margin: 0 auto" width="30%">
</div>

<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();

require_once ('includes/footer.php');