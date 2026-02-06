<?php



$conn = mysqli_connect("localhost", "root", "", "roasted_bean_db");


if (!$conn) {
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) {
        mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS roasted_bean_db");
        mysqli_select_db($conn, "roasted_bean_db");
        

        mysqli_query($conn, "CREATE TABLE IF NOT EXISTS contacts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            message TEXT NOT NULL,
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
    }
}


if (!$conn) {
    die("Database connection failed. Please check if XAMPP is running.");
}


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if (empty($name) || empty($email) || empty($message)) {
    header("Location: contact.php?error=All fields are required");
    exit();
}

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    header("Location: contact.php?success=1");
} else {
    header("Location: contact.php?error=" . urlencode(mysqli_error($conn)));
}

mysqli_close($conn);
?>