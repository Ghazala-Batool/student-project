<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";

// Create connection without selecting database
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS roasted_bean_db";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database
mysqli_select_db($conn, "roasted_bean_db");

// Create menu table
$sql = "CREATE TABLE IF NOT EXISTS menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(8,2) NOT NULL,
    category VARCHAR(50),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'menu' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Create contacts table
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(100),
    message TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_read BOOLEAN DEFAULT FALSE
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'contacts' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Insert sample menu data
$sample_data = [
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Espresso', 120, 'Espresso', 'Strong, concentrated coffee served in a small cup')",
    
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Americano', 150, 'Espresso', 'Espresso shots topped with hot water')",
    
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Cappuccino', 180, 'Espresso', 'Equal parts espresso, steamed milk, and foam')",
    
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Latte', 200, 'Espresso', 'Espresso with steamed milk and light foam')",
    
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Cold Brew', 160, 'Cold', 'Slow-steeped for 24 hours, smooth and refreshing')",
    
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Croissant', 120, 'Food', 'Freshly baked butter croissant')",
    
    "INSERT INTO menu (name, price, category, description) VALUES 
    ('Masala Chai', 100, 'Tea', 'Traditional Pakistani spiced tea with milk')"
];

foreach ($sample_data as $sql) {
    if (mysqli_query($conn, $sql)) {
        echo "Sample data inserted: " . substr($sql, 25, 20) . "...<br>";
    }
}

echo "<h3>✅ Database setup complete!</h3>";
echo "<a href='index.php'>Go to Home Page</a>";

mysqli_close($conn);
?>