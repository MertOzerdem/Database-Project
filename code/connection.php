<?php
$servername = "dijkstra.ug.bcc.bilkent.edu.tr";
$username = "okaanagac";
$password = "c7rujc9w7";


    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "use okaanagac";
    $result = $conn->query($sql);
?>
