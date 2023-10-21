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

$artworkId = $_GET['artworkId'];
$descriptionType = $_GET['descriptionType'];

// Update the corresponding emoji count based on descriptionType
$sql = "UPDATE monalisa SET `$descriptionType` = `$descriptionType` + 1 WHERE id = $artworkId";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();
?>
