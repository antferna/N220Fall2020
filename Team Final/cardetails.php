<?php

$page_title = "Elite Drives | Car Details";

include ('includes/header.php');
require_once('includes/database.php');

////if car id cannot retrieved, terminate the script.
//if (!filter_has_var(INPUT_GET, "id")) {
//    $conn->close();
//    require_once ('includes/footer.php');
//    die("Your request cannot be processed since there was a problem retrieving book id.");
//}
//
////retrieve car id from a query string variable.
//$id = filter_input(INPUT_GET, "car_id", FILTER_SANITIZE_NUMBER_INT);
//
////MySQL SELECT statement
//$sql = "SELECT * "
//    . "FROM cardetails "
//    . "WHERE cardetails.car_id = cardetails.car_id "
//    . "AND car_id=$id";

//select statement
$sql = "SELECT * FROM cardetails";

//execute the query
$query = $conn->query($sql);

if (!filter_has_var(INPUT_GET,'id')){
    echo "Error: user id was not found.";
    require_once('includes/footer.php');
    exit();
}

$user_id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

//select statement
$sql = "SELECT * FROM cardetails WHERE car_id=". $user_id;

//execute the query
$query = $conn->query($sql);

//retrieve results
$row = $query->fetch_assoc();

if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    //include the footer
    require_once ('includes/footer.php');
    exit;
}

?>

<br>
<br>
<div class="cardetailsimg">
    <img src="<?php echo $row['image'] ?>" alt="" width="1080" height="600" />
</div>

<h2 class="detailtitle"><?php echo $row['make'] ?> </h2>

<div class="cardetailstxt">
    <h5>Car Type:</h5> <h4><?php echo $row['car_type'] ?></h4>
    <br>
    <br>
    <h5>Year created:</h5> <h4><?php echo $row['year_created'] ?></h4>
    <br>
    <br>
    <h5>Transmission:</h5> <h4><?php echo $row['transmission'] ?></h4>
    <br>
    <br>
    <h5>Market Price:</h5> <h4><?php echo $row['market_price'] ?></h4>
    <br>
    <br>
    <h5>Color:</h5> <h4><?php echo $row['color'] ?></h4>
    <br>
    <br>
    <h5>Fuel type:</h5> <h4><?php echo $row['fuel_type'] ?></h4>
    <br>
    <br>
    <h5>Description:</h5> <h4><div style="width: 600px"><?php echo $row['details_description'] ?></div></h4>
    <br>
    <br>
    <h5>Price of Trip:</h5> <h4><?php echo $row['trip_price'] ?></h4>
</div>

<div class="detailsspace"></div>


<!--<table id="cardetails" class="cardetails">-->
<!---->
<!--    <td class="col2">-->
<!--        <h4>Title:</h4>-->
<!--        <h4>Author:</h4>-->
<!--        <h4>Category ID:</h4>-->
<!--        <h4>ISBN:</h4>-->
<!--        <h4>Date:</h4>-->
<!--        <h4>Publisher:</h4>-->
<!--        <h4>Price:</h4>-->
<!--        <h4>Description:</h4>-->
<!--    </td>-->
<!--    <td class="col3">-->
<!--        <p>--><?php //echo $row['make'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['car_type'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['year_created'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['transmission'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['market_price'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['color'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['bluetooth'] ?><!--</p>-->
<!--        <p>$--><?php //echo $row['fuel_type'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['detail_description'] ?><!--</p>-->
<!--        <p>--><?php //echo $row['trip_price'] ?><!--</p>-->
<!--    </td>-->
<!---->
<!--</table>-->



<?php
include ('includes/footer.php');
?>
