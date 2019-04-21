<?php
include 'connection.php';


$sql = "SELECT authorID, name, mail, lastname, ID, PublicationTitle, OrganizationTitle, weblink
        FROM paperview
        WHERE ID = $paperID;";
$result = $conn->query($sql);
$author_name = array();
$author_last_name = array();
$author_mail = array();
$paperID = "empty";
$PublicationTitle= "empty";
$OrganizationTitle= "empty";
if ($result->num_rows > 0) {
    $rowcount = 1;
    while($row = $result->fetch_assoc()) {
        array_push($author_name, $row['name']);
        array_push($author_last_name, $row['lastname']);
        array_push($author_mail, $row['mail']);
        $paperID = $row['ID'];
        $PublicationTitle= $row['PublicationTitle'];
        $OrganizationTitle = $row['OrganizationTitle'];
        $weblink = $row['weblink'];
        $rowcount = $rowcount + 1;
    }
    echo "<h1 align='center' class='display-4'>$PublicationTitle</h1>";
    echo "<br>";
    for ($x = 0; $x < count($author_last_name); $x++) {
        echo "<p align='right'> $author_name[$x] $author_last_name[$x]</p>";
        echo "<p align='right'> <a href='#'><i>$author_mail[$x]</i></a> </p>";
    }
    echo "<p class='lead'> Access date: " . date("Y/m/d") . "<br></p>";
    echo "<p align='center'> This paper submitted to <b> $OrganizationTitle </b> and can
        be accessed at <a href='$weblink'>$weblink</a></p>";


} else {
    echo "<p align='center'> No result with that title </p>";
}
$sql = "SELECT scientificArea
        FROM publicationarea
        WHERE publicationID = $paperID;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<p> Related Scientific Area: </p>";
while($row = $result->fetch_assoc()) {
        $area = $row['scientificArea'];
        echo "<p> <i>$area</i> </p>";
    }
}
else {
    echo "<p> no scientific area entry </p>";
}
$conn->close();



?>