<?php
  ini_set( 'error_reporting', E_ALL );
  ini_set( 'display_errors', true );\
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  include 'connection.php';
	$username =  $_POST["username"];
	$customerID = $_POST["customerID"]; 
	$sql = "SELECT *
					FROM customer
					WHERE name = '$username' AND cid = '$customerID'";
	$result = $conn->query($sql);		
	
	if ($result->num_rows > 0) {
		$_SESSION['conf'] =1;
		$row = $result->fetch_assoc();
		$_SESSION['cid'] = $row['cid'];
        $_SESSION['logged_in'] = true;
        echo 'AAAAAAAAAAAAAAAAAAAAAAAAAAAA';
		header("Location: welcome_page.php");
	}
	else {
		$_SESSION['conf'] = -2;
        $_SESSION['logged_in'] = false;
		echo "<script> window.history.go(-1); </script>";
	}
	$conn->close();	
?>

<html>
    <body>
      
    </body>
</html>
 
