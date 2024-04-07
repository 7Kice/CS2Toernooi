<?php
require_once('connection.php');
require("create-database.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST["email"];
    $teamName = $_POST["team_name"];
    $player1 = $_POST["player1"];
    $player2 = $_POST["player2"];
    $player3 = $_POST["player3"];
    $player4 = $_POST["player4"];
    $player5 = $_POST["player5"];

    // Insert data into the table
    $sql = "INSERT INTO signup (email, teamName, player1, player2, player3, player4, player5) VALUES ('$email', '$teamName', '$player1', '$player2', '$player3', '$player4', '$player5')";

    if ($db_conn->query($sql) === TRUE) {
        header("Location: your_success_page.php"); // Change to your desired success page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $db_conn->error;
    }
}

// Close the connection
$db_conn->close();
?>