<?php

$page_title = "Elite Drives | Locations Details";

include('includes/header.php');
require_once('includes/database.php');

//select statement
$sql = "SELECT * FROM locations";

//execute the query
$query = $conn->query($sql);

if (!filter_has_var(INPUT_GET,'id')){
    echo "Error: user id was not found.";
    require_once('includes/footer.php');
    exit();
}

$user_id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

//select statement
$sql = "SELECT * FROM locations WHERE location_id=". $user_id;

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
    require_once('includes/footer.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Elite Drives | Home</title>
</head>
<body>
<br>
<br>
<div class="cardetailsimg">
    <img src="<?php echo $row['location_image'] ?>" alt="" width="1080" height="600" />
</div>

<h2 class="detailtitle"><?php echo $row['location'] ?> </h2>

<div class="cardetailstxt">
    <h5>Description:</h5> <h4><?php echo $row['location_description'] ?></h4>
    <br>
    <br>
    <h5>Distance:</h5> <h4><?php echo $row['distance'] ?> Miles</h4>
    <br>
    <br>
    <h5>Price:</h5> <h4>$<?php echo $row['location_price'] ?></h4>
</div>

<div class="detailsspace"></div>
</body>
</html>
