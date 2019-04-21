<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'connection.php';
$paperTitle = $_POST['paperTitle'];
$selectedOrganization = $_POST['selectedOrganization'];
$paperURL = $_POST['paperURL'];
$scientificArea = $_POST['scientificArea'];
$scientificArea = explode(',', $scientificArea);
$authors = $_POST['authors'];
$authors=preg_replace('/\s+/', '', $authors);
$authors = explode(',', $authors);
$authorIDs = getAuthorIDs($authors, $conn);
if (count($authorIDs) == 1)
{
    echo $authorIDs;
    return -1;
}
if ($authorIDs)
{
    //
}
else {
    echo -1;
    return -1;
}
$organizationID = getOrganizationID($selectedOrganization, $conn);
if ($organizationID == -1) {
    echo -2;
    return -1;
}
$pubID = getPublicationID($paperTitle, $conn);
if ($pubID == -1) {
    insertToPublication($paperTitle, $paperURL, $conn);
    $pubID = getPublicationID($paperTitle, $conn);
    insertToPublicationArea($pubID, $scientificArea, $conn);
    insertToPublicationAuthors($authorIDs, $pubID, $conn);
}
if (isWaiting($pubID, $conn) != 1)
    insertToSubmitted($organizationID, $pubID, $conn);
else{
    echo -4;
    return -1;
}
echo 1;

function isWaiting($pubID, $conn)
{
    $sql = "SELECT ID, status FROM publications WHERE ID = $pubID;";
    $result = $conn->query($sql);
    $stat = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $stat = $row['status'];
        }
    }
    return $stat;
}

function getOrganizationID($selectedOrganization, $conn)
{
    $sql = "SELECT ID FROM organizations WHERE title = '$selectedOrganization';";
    $result = $conn->query($sql);
    $organizationID = -1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $organizationID = $row['ID'];
        }
    }
    return $organizationID;
}

function getAuthorIDs($authors, $conn)
{
    $arr_id = array();
    for ($x = 0; $x < count($authors); $x++) {
        $sql = "SELECT ID FROM authors JOIN users on authorID = ID WHERE username = '$authors[$x]';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($arr_id, $row['ID']);
            }
        }
    }
    return $arr_id;
}

function insertToPublication($title, $weblink, $conn)
{
    $date = date("y-m-d");
    $sql = "INSERT INTO publications (title, publicationDate, citationCount, weblink)
            VALUES ('$title', '$date', 0, '$weblink');";
    $conn->query($sql);

}

function getPublicationID($title, $conn)
{
    $sql = "SELECT ID, title FROM publications WHERE title = '$title';";
    $result = $conn->query($sql);
    $pubID = -1;
    if ($result)
    {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pubID = $row['ID'];
            }
        }
    }

    return $pubID;
}

function insertToPublicationArea($pudID, $scientificArea, $conn)
{
    for ($x = 0; $x < count($scientificArea); $x++) {
        $sql = "INSERT INTO publicationarea (publicationID, scientificArea) VALUES
            ($pudID, '$scientificArea[$x]');";
        $conn->query($sql);
    }
}

function insertToSubmitted($organizationID, $pubID, $conn)
{
    $sql = "INSERT INTO submitted (organizationID, publicationID) VALUES
            ($organizationID, $pubID)";
    $conn->query($sql);
}

function insertToPublicationAuthors($authorIDs, $pubID, $conn)
{

    for ($x = 0; $x < count($authorIDs); $x++) {
        $sql = "INSERT INTO publicationauthors (pubID, authorID) VALUES
            ($pubID, $authorIDs[$x]);";
        $conn->query($sql);
    }
}

?>

