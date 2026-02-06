<?php
function setupDatabase() {
    $conn = mysqli_connect("localhost", "root", "");
    
    if (!$conn) {
        return false;
    }
    

    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS roasted_bean_db");
    mysqli_select_db($conn, "roasted_bean_db");
    
    
    mysqli_query($conn, "CREATE TABLE IF NOT EXISTS menu (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        price DECIMAL(8,2) NOT NULL,
        category VARCHAR(50),
        description TEXT
    )");
    
    $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM menu");
    $row = mysqli_fetch_assoc($result);
    
    if ($row['count'] == 0) {
    
        $sample_items = [
            ['Espresso', 120, 'Espresso', 'Strong coffee'],
            ['Americano', 150, 'Espresso', 'Espresso with water'],
            ['Cappuccino', 180, 'Espresso', 'With steamed milk'],
            ['Latte', 200, 'Espresso', 'Creamy milk coffee'],
            ['Cold Brew', 160, 'Cold', 'Iced coffee'],
            ['Croissant', 120, 'Food', 'Buttery pastry'],
            ['Chai', 100, 'Tea', 'Spiced tea']
        ];
        
        foreach ($sample_items as $item) {
            $sql = "INSERT INTO menu (name, price, category, description) VALUES 
                    ('$item[0]', $item[1], '$item[2]', '$item[3]')";
            mysqli_query($conn, $sql);
        }
    }
    
    return $conn;
}


$conn = setupDatabase();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu - The Roasted Bean</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background: #f2f1ee; padding: 20px; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: #5D4037; border-bottom: 2px solid #D2691E; padding-bottom: 10px; }
        table th { background: #b18c80; color: white; }
        .btn-coffee { background: #7B3F00; color: white; }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>Coffee Menu</h2>
    
    <?php if (!$conn): ?>
        <div class="alert alert-danger">
            <strong>Error:</strong> Could not connect to database. Make sure XAMPP is running.
        </div>
    <?php else: ?>
        <table class="table table-striped">
            <tr><th>Name</th><th>Category</th><th>Description</th><th>Price (RS)</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM menu");
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td><strong>{$row['name']}</strong></td>
                        <td>{$row['category']}</td>
                        <td>{$row['description']}</td>
                        <td><span class='badge bg-warning'>₹{$row['price']}</span></td>
                      </tr>";
            }
            ?>
        </table>
    <?php endif; ?>
    
    <a href="index,php.php" class="btn btn-coffee">Back to Home</a>
</div>
</body>
</html>