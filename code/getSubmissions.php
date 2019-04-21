<?php
include 'connection.php';

$pubIDs = getPublicationIDs($conn);

echo "<table class = 'table table-bordered table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>#</th>";
echo "<th scope='col'>Organization</th>";
echo "<th scope='col'>Title</th>";
echo "<th scope='col'>Date</th>";
echo "<th scope='col'>Citation Count</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$printReturn = printPublicationInfos($pubIDs, $conn);
if ($printReturn == 1) {
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

function getPublicationIDs($conn)
{
    $pubIDs = array();
    $sql = "SELECT organizationID, publicationID
        FROM submitted;";
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
    $oldID = -1;
    $rowcount = 1;
    if (count($pubIDs) == 0) {
        return -1;
    }


    $sql = "SELECT publicationID, publications.title as pubTitle,  organizations.title  as orgTitle ,organizationID, publicationDate, citationCount
FROM submitted LEFT JOIN publications ON publicationID = ID
  LEFT JOIN organizations ON organizationID = organizations.ID
WHERE status = 0;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pubIDs = $row['publicationID'];
            $title = $row['pubTitle'];
            $orgTitle = $row['orgTitle'];
            $publicationDate = $row['publicationDate'];
            $organizationID = $row['organizationID'];
            echo "<tr>";
            echo "<th scope='row'>$rowcount</th>";
            echo "<td>$orgTitle</td>";
            echo "<td><a href='paperpage.php?paper=$pubIDs'>$title</a></td>";
            echo "<td>$publicationDate</td>";
            echo "<td><a href='confirmSubmission.php?paper=$pubIDs&org=$organizationID' class='btn btn-info' role='button'>Confirm</a>
                       <a href='confirmSubmission.php?paper=$pubIDs&org=$organizationID' class='btn btn-warning' role='button'>Deny</a></td>";
            echo "</tr>";
            $rowcount = $rowcount + 1;
        }
    } else {
        return -1;
    }


    return 1;
}

?>
