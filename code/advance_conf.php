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
            $orderbykey = "conferenceDate asc";
            break;
        case("date_desc"):
            $orderbykey = "conferenceDate desc";
            break;
        case("subs"):
            $orderbykey = "subscriber_count desc";
            break;
        default:
            $orderbykey = "title";
            break;
    }
}

$sql = "SELECT conferenceID,title, conferenceDate, country, city_name, subscriber_count
            FROM conferences JOIN organizations ON ID = conferenceID
            ORDER BY $orderbykey;";
$result = $conn->query($sql);
echo "<table class = 'table table-bordered table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>#</th>";
echo "<th scope='col'>Conference</th>";
echo "<th scope='col'>Date</th>";
echo "<th scope='col'>Country</th>";
echo "<th scope='col'>City</th>";
echo "<th scope='col'>Subscribers</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
if ($result->num_rows > 0) {

    $rowcount = 0;
    while($row = $result->fetch_assoc()) {
        $confID = $row['conferenceID'];
        $title = $row['title'];
        $conferenceDate= $row['conferenceDate'];
        $country = $row['country'];
        $city_name = $row['city_name'];
        $subscriber_count = $row['subscriber_count'];
        $rowcount = $rowcount + 1;
        echo "<tr>";
        echo "<th scope='row'>$rowcount</th>";
        echo "<td><a href='infopage.php?info=$confID'>$title</a></td>";
        echo "<td> $conferenceDate</td>";
        echo "<td> $country </td>";
        echo "<td> $city_name </td>";
        echo "<td> $subscriber_count </td>";
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
