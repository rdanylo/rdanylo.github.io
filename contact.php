<?php

// open connection
include 'data_base_connection.php';
$conn = OpenCon("dbResume");
echo "Connected Successfully <br>";

// get fields from POST data
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// create sql statement and insert it
$sql = "INSERT INTO tblContact (fldName, fldEmail, fldPhone, fldMessage)
VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
echo "Contact Information Sent Successfully <br>";
IntoCon($conn, $sql);

// close connection
CloseCon($conn);
echo "Connection Terminated <br>";

// redirect and exit
header("Location: contact_submitted.html");
exit;

?>