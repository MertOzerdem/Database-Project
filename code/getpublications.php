<?php
include 'connection.php';

$pubIDs = getPublicationIDs($info, $conn);
$organizationTitle = getOrganizationTitle($info, $conn);
getEditorName($info, $conn);
echo "<p><b>$organizationTitle</b> </p>";

echo "<table class = 'table table-bordered table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>#</th>";
echo "<th scope='col'>Title</th>";
echo "<th scope='col'>Date</th>";
echo "<th scope='col'>Citation Count</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$printReturn = printPublicationInfos($pubIDs, $conn);
if ($printReturn == 1){
    echo "</tbody>";
    echo "</table>";
} else {
    echo "</tbody>";
    echo "</table>";
    echo "<p align='center'> Empty publication list </p>";
}
$conn->close();

function getEditorName($selectedOrganization, $conn)
{
    $sql = "SELECT editorID FROM manages WHERE organizationID = $selectedOrganization;";
    $result = $conn->query($sql);
    $reditorID = -1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reditorID = $row['editorID'];
        }
    }
    $sql = "SELECT name, lastname, mail FROM users WHERE ID = $reditorID;";
    $result = $conn->query($sql);
    $editorName = "empty";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $editorName = $row['name'];
            $editorLastName = $row['lastname'];
            $mail = $row['mail'];

            echo "<p align='right'> Editor: $editorName $editorLastName</p>";
            echo "<p align='right'> <a href='#'><i>$mail</i></a> </p>";
        }
    }
    return $editorName;
}

function getOrganizationTitle($selectedOrganization, $conn)
{
    $sql = "SELECT ID, title FROM organizations WHERE ID = '$selectedOrganization';";
    $result = $conn->query($sql);
    $organizationTitle = -1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $organizationTitle = $row['title'];
        }
    }
    return $organizationTitle;
}

function getPublicationIDs($organizationID, $conn)
{
    $pubIDs = array();
    $sql = "SELECT organizationID, publicationID
        FROM submitted
        WHERE organizationID = $organizationID;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($pubIDs, $row['publicationID']);
        }
    }
    return $pubIDs;
}

function printPublicationInfos($pubIDs, $conn)
{
    $rowcount = 1;
    if (count($pubIDs) == 0) {
        return -1;
    }
    for ($x = 0; $x < count($pubIDs); $x++)
    {
        $sql = "SELECT title, publicationDate, citationCount FROM publications
        WHERE ID = $pubIDs[$x] AND status = 1;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $publicationDate= $row['publicationDate'];
                $citationCount = $row['citationCount'];
                echo "<tr>";
                echo "<th scope='row'>$rowcount</th>";
                echo "<td><a href='paperpage.php?paper=$pubIDs[$x]'>$title</a></td>";
                echo "<td>$publicationDate</td>";
                echo "<td>$citationCount</td>";
                echo "</tr>";
                $rowcount = $rowcount + 1;
            }
        }
        else {
            return -1;
        }
    }
    return 1;
}
?>
