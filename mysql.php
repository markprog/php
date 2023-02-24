<?php

$server = "localhost";
$user = "root";
$pass = "root";
$dbname = "testdb";

$conn = new mysqli($server, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
echo "Connection succesful";

// $sql = "CREATE DATABASE testDB1";

// if ($conn->query($sql) === TRUE) {
//     echo "DB created";
// } else {
//     echo "DB not created";
// }

$sql = "CREATE TABLE users(
    id VARCHAR (30) NOT NULL PRIMARY KEY,
    name VARCHAR (30) NOT NULL,
    password VARCHAR (30) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "table created";
    } else {
        echo "table not created";
    }



$conn->close();
?>