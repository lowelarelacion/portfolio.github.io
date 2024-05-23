<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = " ";
$database = "portfolio";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO projects (image, title, description) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $image, $title, $description);

// Set parameters and execute
$image = file_get_contents($_FILES['image']['tmp_name']);
$title = $_POST['title'];
$description = $_POST['description'];

$stmt->send_long_data(0, $image);

if ($stmt->execute()) {
    echo "Project saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
