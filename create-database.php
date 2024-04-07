<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "CSTourney";

$conn = new mysqli($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();

$db_conn = new mysqli($servername, $username, $password, $dbname);

if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username_hash VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($db_conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $db_conn->error;
}

$sql2 = "CREATE TABLE IF NOT EXISTS signup (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    teamName VARCHAR(100) NOT NULL,
    player1 VARCHAR(50) NOT NULL,
    player2 VARCHAR(50) NOT NULL,
    player3 VARCHAR(50) NOT NULL,
    player4 VARCHAR(50) NOT NULL,
    player5 VARCHAR(50) NOT NULL
)";
if ($db_conn->query($sql2) === TRUE) {
} else {
    echo "Error creating table: " . $db_conn->error;
}

?>