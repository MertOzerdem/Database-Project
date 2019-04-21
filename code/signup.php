<?php
ini_set('error_reporting', E_ALL );
ini_set('display_errors', true );
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include 'connection.php';
$username =  $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$account_type = $_POST["account_type"];
$institute = $_POST["institute"];
$privilege = -1;
switch ($account_type)
{
    case ("Editor"):
        $privilege = 3;
        break;
    case ("Reviewer"):
        $privilege = 2;
        break;
    case ("Author"):
        if ($institute == "") {
            echo -1;
            return;
        }
        $privilege = 1;
        break;
    case ("Subscriber"):
        $privilege = 0;
        break;
    default:
        $privilege = -1;
        break;
}
insertIntoUsers($email, $username, $password, $privilege, $conn);
if ($account_type == "Author")
{

}
echo $x;

function insertIntoBelongs($ID, $inst, $conn)
{

}


function insertIntoUsers($email , $username, $password, $privilege, $conn)
{
    $sql = "INSERT INTO users (mail, username, password, privilege_level)
      VALUES ('$email','$username', '$password', '$privilege');";
    $result = $conn->query($sql);
    if ($result)
    {
        return 1;
    }
    else {
        return -1;
    }
}

function getUserId($email, $conn)
{
    $sql = "SELECT ID FROM users WHERE mail = '$email';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['ID'];
    } else {
        return -1;
    }
}
?>

