<?php
    include_once('config.php');

    $conn = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME) or die("Connection failed: " . mysqli_connect_error());

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>