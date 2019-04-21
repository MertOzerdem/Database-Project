<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'connection.php';
$paperID = -1;
if(isset($_GET['paper'])) {
    $paperID = $_GET['paper'];
} else {
    return;
}
$orgID = -1;
if(isset($_GET['org'])) {
    $orgID = $_GET['org'];
} else {
    return;
}

$sql = "DELETE FROM submitted
        WHERE publicationID = $paperID AND organizationID = $orgID;";
$conn->query($sql);

$done = true;


if ($done)
{
    header("Location: submissions.php");
    exit;
}


?>


