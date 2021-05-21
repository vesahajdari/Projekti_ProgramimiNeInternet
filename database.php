<?php

require_once("DataBaseConfig");
$con = DataBaseConfig::connect();

// Execute the query to create the database
$createDatabaseSQL =
    "CREATE database  food_to_your_heart";
try {
    $con->exec($createDatabaseSQL);
} catch (PDOException $e) {
    echo $e->getMessage();
}
echo "<br/>";


// Execute the query to create the "admin" table
$createUserTable =
    "CREATE TABLE  admin
    (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(50),
    )";

try {
    $con->exec($createUserTable);
} catch (PDOException $e) {
    echo $e->getMessage();
}
echo "<br/>";


// Execute the query to create the "category" table
$createProductTable =
    "CREATE TABLE  category
    (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        image_name varchar(255)
    )";

try {
    $con->exec($createProductTable);
} catch (PDOException $e) {
    echo $e->getMessage();
}
echo "<br/>";


// Execute the query to create the "food" table
$createNoteTable =
    "CREATE TABLE food
    (
        id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title varchar (150),
        description varchar (255)
        category_id int
    )";

try {
    $con->exec($createNoteTable);
} catch (PDOException $e) {
    echo $e->getMessage();
}
echo "<br/>";




