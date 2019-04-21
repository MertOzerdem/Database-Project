<?php

include 'connection.php';
$selectedPaper = $_POST['$selectedPaper'];
$selectedReviewer = $_POST['selectedReviewer'];
$password = $_POST['password'];

$paperID = getPaperID($selectedPaper, $conn);
if ($paperID == -1) {
    echo -1;
    return -1;
}
$OrgID = getOrganizationID($paperID, $conn);
if ($OrgID == -1) {
    echo -2;
    return -1;
}
$editorID = getEditor($OrgID, $conn);
if ($editorID == -1) {
    echo -3;
    return -1;
}
$revID = getReviewerID($selectedReviewer, $conn);
if ($revID == -1) {
    echo -4;
    return -1;
}
assingPaper($editorID, $revID, $paperID, $conn);
echo 1;
function getPaperID($title, $conn)
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

function getReviewerID($revName, $conn)
{
    $sql = "SELECT ID
            FROM users 
            WHERE username = '$revName';";
    $result = $conn->query($sql);
    $revID = -1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $revID = $row['ID'];
        }
    }
    return $revID;
}


function getOrganizationID($paperID, $conn)
{
    $sql = "SELECT organizationID
            FROM submitted 
            WHERE publicationID = $paperID;";
    $result = $conn->query($sql);
    $pubID = -1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pubID = $row['organizationID'];
        }
    }
    return $pubID;
}

function getEditor($orgID, $conn)
{
    $sql = "SELECT editors.editorID FROM manages 
LEFT JOIN editors ON editors.editorID = manages.editorID
 WHERE manages.organizationID = $orgID;";
    $result = $conn->query($sql);
    $edID = -1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $edID = $row['editorID'];
        }
    }
    return $edID;
}

function assingPaper($editorID, $reviewerID, $paperID, $conn)
{
    $sql = "INSERT INTO assigns (editorID, reviewerID, publicationID) 
  VALUES ($editorID, $reviewerID, $paperID);";
    $conn->query($sql);
    $sql = "INSERT INTO reviews (reviewerID, publicationID, status) 
VALUES ($reviewerID, $paperID, 1);";
    $conn->query($sql);
}
?>