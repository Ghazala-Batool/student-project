<!DOCTYPE html>
<html>
<head>
    <title>About Us - The Roasted Bean</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color:#e4e2cae6;
            font-family: 'Georgia', serif;
        }
        
        .hero-section {
            background: linear-gradient(rgba(40, 1, 1, 0.97), rgba(37, 1, 1, 0.7)), 
                        url('about-hero.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .section-title {
            color: #5D2900;
            border-bottom: 3px solid #D2691E;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        
        .team-card img {
            border: 5px solid #D2691E;
        }
        
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .timeline-step {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #D2691E;
            box-shadow: 0 3px 10px rgba(29, 1, 1, 0.93);
        }
        
        .timeline-number {
            background: #D2691E;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .btn-chocolate {
            background-color: #7B3F00;
            color: white;
            padding: 10px 30px;
        }
        
        .btn-chocolate:hover {
            background-color: #5D2900;
            color: white;
        }
    </style>
</head>
<body>


<div class="hero-section">
    <div class="container">
        <h1 class="display-4">Our Story</h1>
        <p class="lead">Brewing exceptional coffee since 2015</p>
    </div>
</div>


<div class="container py-5">
    

    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <h2 class="section-title text-center">The Roasted Bean Journey</h2>
            <p class="lead text-center">
                What began as a passion project has grown into a community landmark 
                where every cup is crafted with care and every customer feels at home.
            </p>
            <p>
                Our founder, Ghazala Batool, Ayesha Amin, Hafsa Ashraf, Aima Amjad, discovered her love for coffee while traveling 
                through the coffee plantations of Colombia. Inspired by the farmers' dedication 
                and the complex flavors of freshly harvested beans, she returned home with 
                a mission: to bring that same quality and passion to her community.
            </p>
            <p>
                Today, The Roasted Bean is more than just a coffee shop. It's a place where 
                students study, friends meet, and coffee lovers discover new favorites. 
                We're proud to be part of your daily routine and special moments.
            </p>
        </div>
    </div>


    <div class="row mb-5">
        <div class="col-12">
            <h2 class="section-title text-center">Our Values</h2>
            <p class="lead text-center">Ethical sourcing, community focus, and quality in every detail.</p>
        </div>
       
    </div>

    
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="section-title text-center">Our Process</h2>
            <p class="lead text-center">Farm to roaster to cup—every step matters.</p>
            </div>
    </div>

    
    <div class="text-center mt-5">
        <h3>Come Experience the Difference</h3>
        <p class="mb-4">Visit us today and taste why our coffee is special</p>
        <a href="index,php.php" class="btn btn-chocolate me-3">Home</a>
        <a href="menu.php" class="btn btn-chocolate">View Menu</a>
        <a href="contact.php" class="btn btn-chocolate ms-3">Contact Us</a>
    </div>
</div>


<div class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2024 The Roasted Bean. This is a student project for learning purposes.</p>
        <p>Created to practice HTML, CSS, Bootstrap, PHP and MySQL</p>
    </div>
</div>

</body>
</html>