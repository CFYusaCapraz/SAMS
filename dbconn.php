<?php
    $dbHost = 'localhost';
    $dbName = 'sams';
    $dbUsername = 'yusa';
    $dbPassword = ***REMOVED***;

    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
      }

?>
