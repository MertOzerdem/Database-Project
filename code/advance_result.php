<?php
include 'connection.php';

$orderbykey = "title";
if ($sort != "empty")
{
    switch ($sort)
    {
        case ("rel"):
            $orderbykey = "title asc";
            break;
        case ("date_asc"):
            $orderbykey = "journalDate asc";
            break;
        case("date_desc"):
            $orderbykey = "journalDate desc";
            break;
        case("subs"):
            $orderbykey = "subscriber_count desc";
            break;
    }
}

$sql = "SELECT journalID, title, volume, journalDate, subscriber_count
            FROM journals JOIN organizations ON ID = journalID
            ORDER BY $orderbykey;";

if ($org != "empty")
{
    $sql = "SELECT journalID, title, volume, journalDate, subscriber_count
            FROM journals LEFT JOIN organizations ON ID = journalID
            WHERE title like '%org%'
            ORDER BY $orderbykey;";
}

$result = $conn->query($sql);
echo "<table class = 'table table-bordered table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>#</th>";
echo "<th scope='col'>Journal</th>";
echo "<th scope='col'>Volume</th>";
echo "<th scope='col'>Date</th>";
echo "<th scope='col'>Subscribers</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
if ($result->num_rows > 0) {

    $rowcount = 0;
    while($row = $result->fetch_assoc()) {
        $journalID = $row['journalID'];
        $title = $row['title'];
        $volume = $row['volume'];
        $journalDate = $row['journalDate'];
        $subsCount = $row['subscriber_count'];
        $rowcount = $rowcount + 1;
        echo "<tr>";
        echo "<th scope='row'>$rowcount</th>";
        echo "<td><a href='infopage.php?info=$journalID'>$title</a></td>";
        echo "<td> $volume</td>";
        echo "<td> $journalDate </td>";
        echo "<td> $subsCount </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "</tbody>";
    echo "</table>";
    echo "<p align='center'> No result with that title </p>";
}

$conn->close();
?>
