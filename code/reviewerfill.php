<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'connection.php';
$sql = "SELECT username
        FROM reviewers LEFT JOIN users ON ID = reviewerID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['username'];
   ;
        echo "<option>" .  " $name " ."</option>";
    }
} else {
    echo "err";
}
$conn->close();
?>

