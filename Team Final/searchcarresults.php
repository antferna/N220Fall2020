<?php

$page_title = "Elite Drives | Search";
require 'includes/header.php';
require_once('includes/database.php');

if (filter_has_var(INPUT_GET, "terms")) {
    $terms_str = filter_input(INPUT_GET, 'terms', FILTER_SANITIZE_STRING);
} else {
    echo "There was not search terms found.";
    include ('includes/footer.php');
    exit;
}

//explode the search terms into an array
$terms = explode(" ", $terms_str);

//select statement using pattern search. Multiple terms are concatnated in the loop.
$sql = "SELECT * FROM cardetails WHERE 1";
foreach ($terms as $term) {
    $sql .= " AND make LIKE '%$term%'";
}

//execute the query
$query = @$conn->query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg.";
    $conn->close();
    include ('includes/footer.php');
    exit;
}

//echo "<h2>Cars: $terms_str</h2>";

//displays results in a table
if ($query->num_rows == 0) {
    echo "<div class='searchimg'></div><br><br>Your search <i>'$terms_str'</i> did not match any cars in our garage <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    include ('includes/footer.php');
    exit;
}
?>

    <div class="searchimg"><br><br><br><br><b>Search Results: '<?php echo $terms_str ?>'</b></div>

<table id="searchlist" class="searchlist">
    <tr>
        <th class="col1">Make</th>
        <th class="col2">Car Type </th>
        <th class="col3">Trip Price</th>
    </tr>
    <!-- add PHP code here to list all books from the "books" table -->
    <?php
    //create a while loop here to insert one row for each user.
    //insert a row into the table for each row of data

    while ($row = $query->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='resultcol1'><a href='cardetails.php?id=", $row['car_id'], "'>", $row['make'], "</a></td>";
        echo "<td class='resultcol1'>", $row['car_type'], "</td>";
        echo "<td class='resultcol1'>", $row['trip_price'], "</td>";
//            echo "<td><img src='", $row['image'],"'></td>";
        echo "</tr>";
    }

    ?>
</table>

<div class="garagespace">
    <br>
    <hr style="margin: 0 auto" width="30%">
</div>



<br>
    <br>
    <br>
    <br>
    <br>
<?php
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();

include ('includes/footer.php');

