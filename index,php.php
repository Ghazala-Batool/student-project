<!DOCTYPE html>
<html>
<head>
    <title>The Roasted Bean</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Body background */
        body {
            background: url('https://thumbs.dreamstime.com/b/coffee-cup-cafe-latte-beans-32206081.jpg') 
                      center/cover no-repeat fixed;
            min-height: 100vh;
            margin: 0;
        }
        
        /* Chocolate buttons */
        .btn-chocolate {
            background-color: #7B3F00;
            border-color: #7B3F00;
            color: white;
            padding: 12px 30px;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .btn-chocolate:hover {
            background-color: #5D2900;
            border-color: #5D2900;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .btn-chocolate-outline {
            color: #7B3F00;
            border-color: #7B3F00;
            background-color: transparent;
            padding: 12px 30px;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .btn-chocolate-outline:hover {
            background-color: #7B3F00;
            color: white;
            border-color: #7B3F00;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        /* Container styling */
        .container {
            background-color: rgba(228, 226, 202, 0.9);
            padding: 50px;
            border-radius: 15px;
            margin-top: 150px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #5D2900;
            font-weight: bold;
            margin-bottom: 25px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        p {
            color: #7B3F00;
            font-size: 1.3rem;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h1 class="display-4">Welcome to The Roasted Bean</h1>
    <p class="lead">Your favorite place for fresh coffee and cozy atmosphere</p>
     <a href="index,php.php" class="btn btn-chocolate">Home</a>

    <a href="about.php" class="btn btn-chocolate">About</a>
    <a href="menu.php" class="btn btn-chocolate">Menu</a>
    <a href="contact.php" class="btn btn-chocolate">Contact</a>
</div>

</div>
</body>
</html>