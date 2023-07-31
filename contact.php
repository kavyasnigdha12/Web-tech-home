<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message= $_POST["message"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inbox";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare and bind the SQL statement
$stmt = $conn->prepare('INSERT INTO texts(name, email, subject, message) VALUES (?, ?, ?, ?)');
$stmt->bind_param('ssss', $name, $email, $subject, $message);

  // Execute the statement
if ($stmt->execute()) {
    echo  "<script>alert('note sent')</script>";
} else {
    echo 'Error occurred, Please try again.';
}

  // Close the statement and the database connection
$stmt->close();
$conn->close();
}
?>
