<?php

function OpenCon($db) {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function CloseCon($conn) {
    $conn -> close();
}

function IntoCon($conn, $sql) {
    $conn->query($sql) or die("Error: %s\n". $conn -> error);
    return $conn;
}

?>