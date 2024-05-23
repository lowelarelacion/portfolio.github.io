<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Check if a file is uploaded
    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] === 0) {
        // File details
        $fileName = $_FILES['fileUpload']['name'];
        $fileType = $_FILES['fileUpload']['type'];
        $fileTmpName = $_FILES['fileUpload']['tmp_name'];

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO uploaded_files (name, type, data) VALUES (?, ?, ?)");
        $null = NULL;
        $stmt->bind_param("sss", $fileName, $fileType, $null);
        $stmt->send_long_data(2, file_get_contents($fileTmpName));
        $stmt->execute();

        // Close statement and connection
        $stmt->close();
        $conn->close();

        // Redirect back to the page after upload
        header("Location: index.php");
        exit();
    } else {
        echo "Error uploading file.";
    }
}
?>
