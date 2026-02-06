<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Contact Us</h2>

    <form method="post" action="save_contact.php">
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <textarea name="message" class="form-control mb-2" placeholder="Message" required></textarea>
        <button class="btn btn-dark">Send</button>
    </form>

    <a href="index,php.php" class="btn btn-secondary mt-3">Back</a>
</div>

</body>
</html>