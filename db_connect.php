<?php
$servername = "localhost";
$username = "root";
$password = "monalisa";
$dbname = "monalisa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Artwork Name`, `Image`, `Artist`, `Year`, `Happy Description`, `Angry Description`, `Sad Description`, `Neutral Description` FROM `monalisa`";
$result = $conn->query($sql);

?>
